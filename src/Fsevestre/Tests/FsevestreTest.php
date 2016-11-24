<?php

namespace Hackathon3\Fsevestre\Tests;

use Hackathon3\Fsevestre\Fsevestre;

class FsevestreTest extends \PHPUnit_Framework_TestCase
{
    /**
     * 2 choses sont testées ici :
     * - Il faut que la mémoire utilisée par le script soit de 0 !
     * - Je remplis un fichier avec les mêmes données que le fichier de démo (pour éviter que vous trichiez et renvoyez
     * un simple tableau vide) et compare leur md5.
     */
    public function testFsevestre()
    {
        $memory = memory_get_peak_usage(true); // http://php.net/manual/fr/function.memory-get-peak-usage.php

        $class = new Fsevestre();
        $fileName = __DIR__.'/file.txt';
        $testFileName = __DIR__.'/test_file.txt';

        // clear test file
        $newFileHandle = fopen($testFileName, 'w');
        ftruncate($newFileHandle, 0);

        foreach ($class->getLinesFromFileName($fileName) as $line => $value) {
            fwrite($newFileHandle, $value);
        }

        $this->assertSame(md5_file($fileName), md5_file($testFileName));

        // clear test file
        $newFileHandle = fopen($testFileName, 'w');
        ftruncate($newFileHandle, 0);

        // The memory used must be 0 ! O_o"
        $this->assertSame(0, memory_get_peak_usage(true) - $memory);
    }
}
