<?php

namespace App\Filament\Resources\MembershipResource\Pages;

use App\Enums\MembershipStatusEnum;
use App\Filament\Resources\MembershipResource;
use App\Mail\MembershipApproved;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Mail;

class EditMembership extends EditRecord
{
    protected static string $resource = MembershipResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave()
    {
        // IF APPROVED SEND A EMAIL TO THE MEMBERSHIP ABOUT THE MEMBERSHIP STATUS
        if($this->record->status === MembershipStatusEnum::APPROVED)
        {
            Mail::to($this->record->email)->queue(new MembershipApproved());
            $this->record->update([
                'status' => MembershipStatusEnum::ACTIVE,
            ]);
        }



    }


}
