<?php
/**
 * Description of ImageUploader.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Utils;


use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageUploader
{
    public function upload(UploadedFile $file, string $name): void
    {
        Storage::put($name, $file->getContent());
    }

    public static function generateFilenameWithStorageURL(string $filename): string
    {
        $storageUrl = self::storageURL();

        return "$storageUrl$filename";
    }

    public static function storageURL(): string
    {
        $assetsFilesystem = config('filesystems.assets_filesystem');
        if ($assetsFilesystem === 's3') {
            return self::storageURLS3();
        }
        if ($assetsFilesystem === 's3-cached') {
            return self::storageURLS3Cached();
        }

        return config('images.storageUrl');
    }

    private static function storageURLS3(): string
    {
        $region = config('filesystems.disks.s3.region');
        $bucket = config('filesystems.disks.s3.bucket');

        return "https://s3.{$region}.amazonaws.com/$bucket/";
    }

    private static function storageURLS3Cached(): string
    {
        $host = config('filesystems.disks.assets.host');
        $bucket = config('filesystems.disks.s3.bucket');

        return "https://$host/$bucket/";
    }
}
