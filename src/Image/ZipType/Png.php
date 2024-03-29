<?php namespace TrueMe\Image\ZipType;

class Png
{
    Const MIN_QUALITY = 30;
    const MAX_QUALITY = 80;

    public function compress()
    {
        return shell_exec('pngquant --quality=' 
            . self::MIN_QUALITY . ' - ' . self::MAX_QUALITY . ' - < '. $this->image->path);
    }
}
