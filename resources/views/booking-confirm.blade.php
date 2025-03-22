<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto p-8">
        <div class="max-w-lg mx-auto bg-gray-50 rounded-2xl p-10">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-green-500 mb-2">🎉 Meeting Scheduled Successfully!</h1>
                <p class="text-gray-700">Thank you for booking a meeting, {{ $attendeeName ?? 'Guest' }}.</p>
            </div>
    
            <div class="space-y-4">
                <div class="flex justify-between items-center py-3 border-b">
                    <span class="font-semibold">📅 Event Type:</span>
                    <span>{{ ucfirst($event) ?? 'N/A' }}</span>
                </div>
    
                <div class="flex justify-between items-center py-3 border-b">
                    <span class="font-semibold">📧 Email:</span>
                    <span>{{ $email ?? 'N/A' }}</span>
                </div>
    
                <div class="flex justify-between items-center py-3 border-b">
                    <span class="font-semibold">⏰ Start Time:</span>
                    <span>{{ date('F j, Y, g:i A', strtotime($startTime)) ?? 'N/A' }}</span>
                </div>
    
                <div class="flex justify-between items-center py-3">
                    <span class="font-semibold">✅ Status:</span>
                    <span class="{{ $status === 'true' ? 'text-green-600' : 'text-red-600' }}">
                        {{ $status === 'true' ? 'Success' : 'Failed' }}
                    </span>
                </div>
            </div>
    
            <div class="mt-8 text-center">
                <a href="/" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600">Go Back to Home</a>
            </div>
        </div>
    
        <div class="max-w-lg mx-auto bg-gray-50 rounded-2xl p-8 mt-10">
            <h2 class="text-xl font-semibold mb-4">💬 Join Our Community</h2>
            <p class="mb-4">Connect with us on Discord and follow us on social media to stay updated.</p>
            <div class="flex justify-center">
                <a href="https://discord.gg/PAbmCn5m" class="bg-indigo-500 text-white py-2 px-6 rounded-lg hover:bg-indigo-600">Join Discord</a>
            </div>
        </div>
    
        <div class="max-w-lg mx-auto bg-gray-50 rounded-2xl p-8 mt-10">
            <h2 class="text-xl font-semibold mb-4">🛠️ Follow These Steps</h2>
            <ol class="list-decimal list-inside space-y-3">
                <li>Download and install Visual Studio Code.</li>
                <li>Install the Live Share extension from the <a href="https://marketplace.visualstudio.com/items?itemName=MS-vsliveshare.vsliveshare" class="text-blue-500 underline">Visual Studio Marketplace</a>.</li>
                <li>Sign in to Live Share and start collaborating instantly.</li>
            </ol>
        
            <div class="mt-6">
                <h3 class="text-lg font-medium mb-2">🎥 Watch the Setup Guide</h3>
                <video class="w-full rounded-lg shadow-md" controls>
                    <source src="{{ asset('assets/laravel chennai.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>        
    </div>
</body>
</html>