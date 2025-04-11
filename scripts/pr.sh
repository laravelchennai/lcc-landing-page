#!/bin/bash

# Default values
create_pr=false

# Dashes for separation
echo "---------------------------------------------------------------------------"
# ASCII art
echo " _                              _       ____ _                            _ "
echo "| |    __ _ _ __ __ ___   _____| |     / ___| |__   ___ _ __  _ __   __ _(_)"
echo "| |   / _\` | '__/ _\` \ \ / / _ \ |    | |   | '_ \ / _ \ '_ \| '_ \ / _\` | |"
echo "| |__| (_| | | | (_| |\ V /  __/ |    | |___| | | |  __/ | | | | | | (_| | |"
echo "|_____\__,_|_|  \__,_| \_/ \___|_|     \____|_| |_|\___|_| |_|_| |_|\__,_|_|"
echo "                                                                  "
echo "Laravel Chennai PR assist script (c) 2025 - Maintained by Laravel Chennai Community"
echo ""
# Dashes for separation
echo "---------------------------------------------------------------------------"
echo ""

echo -n "Hi 👋"
echo ""

# Prompt the user if they want to create a new PR
read -p "Do you want to create a new pull-request on Github for this branch? (y/n): " create_pr_input
if [[ $create_pr_input =~ ^[Yy]$ ]]; then
    create_pr=true
elif [[ ! $create_pr_input =~ ^[Nn]$ ]]; then
    echo "Invalid input 😡 Please enter 'y' or 'n'."
    exit 1
fi

echo "---------------------------------------------------------------------------"
echo "Checking PR Checklist..."
echo "---------------------------------------------------------------------------"

checklist_items=(
    "All files that have been modified in the 'app' folder have PHP doc blocks"
    "The code that I have written follows DRY & SOLID principles"
)

checklist_status=()

for item in "${checklist_items[@]}"; do
    read -p "$item (y/n): " response
    if [[ $response =~ ^[Yy]$ ]]; then
        checklist_status+=("- [x] $item")
    else
        checklist_status+=("- [ ] $item")
    fi
done

echo "---------------------------------------------------------------------------"
read -p "Enter any description you want to add to this PR: " custom_description
if [[ -z "$custom_description" ]]; then
    custom_description="No additional description provided."
fi

echo "---------------------------------------------------------------------------"
echo "⬇️ COPY FROM HERE ⬇️"
echo "---------------------------------------------------------------------------"
echo ""

# Get current branch name
branch_name=$(git rev-parse --abbrev-ref HEAD)

# Get the base branch name
base_branch="main" # You can change this if your main branch is named differently

# Get the list of files changed
changed_files=$(git diff --name-only $base_branch...$branch_name)

# Get the GitHub repository and organization name from the Git remote URL
remote_url=$(git config --get remote.origin.url)
repo_name=$(basename -s .git $remote_url)
org_name=$(basename $(dirname $remote_url))

# Author name from Git config
author_name=$(git config user.name)

# PR Title
pr_title="## $author_name - Pull Request for $branch_name"
echo "$pr_title"
echo ""

echo "#### PR Description:"
echo ""
echo "$custom_description"
echo ""

# Checklist
echo "## PR Checklist:"
echo "### I, $author_name, have verified the following:"
for status in "${checklist_status[@]}"; do
    echo "$status"
done

# Files changed
echo "### Files changed in this PR:"
for file in $changed_files; do
    echo " - $file"
done
echo ""

# Additional commands to run
echo "---"
echo "### Additional commands to run while merging PR?"
commands_to_run=0

if [[ $changed_files == *"composer."* ]]; then
    echo "  - Run \`composer install\`"
    commands_to_run=1
fi
if [[ $changed_files == *"config/"*".php"* ]]; then
    echo "  - Run \`php artisan config:cache\`"
    commands_to_run=1
fi
if [[ $changed_files == *".env.example"* ]]; then
    echo "  - **ALERT**: Update \`.env.example\` and run \`php artisan config:cache\`"
    commands_to_run=1
fi
if [[ $changed_files == *"/database/migrations/"* ]]; then
    echo "  - Run \`php artisan migrate\`"
    commands_to_run=1
fi
if [[ $changed_files == *"routes/web.php"* ]] || [[ $changed_files == *"routes/api.php"* ]]; then
    echo "  - Run \`php artisan route:cache\`"
    commands_to_run=1
fi

if [ "$commands_to_run" -eq 0 ]; then
    echo "# No additional commands needed ✅"
    echo ""
fi
echo ""

# Test coverage
echo "---"
echo -n "#### Does this PR include test coverage? "
echo ""
if [[ $changed_files == *"tests/"* ]]; then
    echo -n "# Yes 😊"
else
    echo -n "# No 😰 "
fi
echo ""

# PHP Insights section
echo "### PHP Insights Output:"
echo "\`\`\`"
insights_output=$(php artisan insights -s)
echo "$insights_output"
echo "\`\`\`"

# Open GitHub PR if requested
if [ "$create_pr" = true ]; then
    github_url="https://github.com/$org_name/$repo_name/pull/new/$branch_name"
    if [[ "$OSTYPE" == "darwin"* ]]; then
        open "$github_url"
    elif [[ "$OSTYPE" == "linux-gnu"* ]]; then
        xdg-open "$github_url"
    elif [[ "$OSTYPE" == "cygwin" || "$OSTYPE" == "msys" || "$OSTYPE" == "win32" ]]; then
        start "$github_url"
    else
        echo "Please manually open the following URL in your browser: $github_url"
    fi
fi
