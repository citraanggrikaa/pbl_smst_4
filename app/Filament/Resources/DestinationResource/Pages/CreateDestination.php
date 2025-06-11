<?php

namespace App\Filament\Resources\DestinationResource\Pages;

use App\Filament\Resources\DestinationResource;
use App\Jobs\ProcessEmbeddingJob;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Log;

class CreateDestination extends CreateRecord
{
    protected static string $resource = DestinationResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        Log::info('--- Memulai proses handleRecordCreation ---');
        Log::info('Data mentah dari form:', $data);

        // Ini adalah baris yang mencoba membuat record di database
        $record = static::getModel()::create($data);

        Log::info('Record berhasil dibuat di database dengan ID: ' . $record->id);

        // Karena kita sudah di sini, kita bisa langsung panggil job-nya
        // ProcessEmbeddingJob::dispatch($record);
        ProcessEmbeddingJob::dispatch($record->id);
        Log::info('Job untuk embedding telah dikirim ke antrian.');

        return $record;
    }
}
