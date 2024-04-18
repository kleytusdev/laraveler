<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\Storage;

trait Base64Decodable
{
    public function saveImage(string $base64Data, string $folderName, string $fileName): string
    {
        $extension = $this->getFileExtension($base64Data);
        $image = $this->fileFormat($base64Data);

        $path = "$folderName/{$fileName}$extension";

        Storage::put($path, $image);

        return $path;
    }

    private function fileFormat(string $base64File): string
    {
        return base64_decode(explode(',', $base64File)[1]);
    }

    private function getFileExtension(string $base64File): string
    {
        $mimeType = explode(';', $base64File)[0];

        return match ($mimeType) {
            'data:application/pdf' => ".pdf",
            'data:application/json' => ".json",
            'data:image/gif' => ".gif",
            'data:image/jpeg' => ".jpg",
            'data:image/png' => ".png",
            'data:image/webp' => ".webp",
            'data:image/x-icon' => ".ico",
            'data:video/mp4' => ".mp4",
            'data:video/mpeg' => ".mpeg",
            default => throw new Exception("El tipo de archivo no es soportado"),
        };
    }
}
