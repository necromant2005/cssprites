<?php

use CSSPrites\Configuration;
use CSSPrites\ImageProcessor\ImagineImageProcessor;
use CSSPrites\ImagesCollection;
use CSSPrites\SpriteProcessor\SimpleBinPackingSpriteProcessor;

class SimpleBinPackingSpriteProcessorTest extends AbstractBaseTest
{
    protected $processor;
    protected $directory;
    protected $mask;
    protected $filename;

    protected $config;

    protected $collection;

    public function __construct()
    {
        $this->config = new Configuration();
        $this->config->load('./tests/stubs/test-cssprites-correct-config.json');

        $this->processor = new ImagineImageProcessor();
        $this->processor->setConfig(['driver' => 'gd']);

        $this->directory = './tests/stubs';
        $this->mask      = 'test-*.png';
        $this->filename  = 'sprite.png';

        $this->collection = new ImagesCollection(
            $this->processor,
            $this->directory,
            $this->mask,
            $this->filename
        );
    }

    public function testProcess()
    {
        $pathL = './tests/stubs/spritetest-simplebinpacking-correct.png';
        $pathS = './tests/stubs/spritetest-simplebinpacking-ouput.png';

        $sprite = new SimpleBinPackingSpriteProcessor($this->processor);
        $sprite->configure($this->config->get('sprite'))
            ->overwrite(true)
            ->setFilepath($pathS)
            ->setSpaces(2)
            ->setImages($this->collection)
            ->process();

        $saved = $sprite->save();

        $this->assertInstanceOf('CSSPrites\SpriteProcessor\SimpleBinPackingSpriteProcessor', $sprite);
        $this->assertInstanceOf('Imagine\Gd\Image', $saved);

        $this->assertImageEquals($pathS, $pathL);
        unlink($pathS);
    }
}
