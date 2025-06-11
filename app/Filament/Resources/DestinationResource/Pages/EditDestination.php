<?php

namespace App\Filament\Resources\DestinationResource\Pages;

use App\Filament\Resources\DestinationResource;
use App\Jobs\ProcessEmbeddingJob;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Log;

class EditDestination extends EditRecord
{
    protected static string $resource = DestinationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

     protected function handleRecordUpdate(Model $record, array $data): Model
    {
        Log::info('--- Memulai proses handleRecordUpdate ---');
        Log::info('Data baru dari form edit:', $data);

        // Ini adalah baris yang meng-update record di database
        $record->update($data);

        Log::info('Record berhasil di-update di database.');
        
        // Panggil job kita di sini
        ProcessEmbeddingJob::dispatch($record->id);
        Log::info('Job untuk embedding (dari update) telah dikirim ke antrian.');

        return $record;
    }
}
