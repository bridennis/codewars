<?php

use PHPUnit\Framework\TestCase;

class TrainSimpleEncryptionNumber1AlternatingSplitTest extends TestCase
{
    public function testEncrypt()
    {
        $this->assertSame("This is a test!", TrainSimpleEncryptionNumber1AlternatingSplit::encrypt("This is a test!", 0));
        $this->assertSame("hsi  etTi sats!", TrainSimpleEncryptionNumber1AlternatingSplit::encrypt("This is a test!", 1));
        $this->assertSame("s eT ashi tist!", TrainSimpleEncryptionNumber1AlternatingSplit::encrypt("This is a test!", 2));
        $this->assertSame(" Tah itse sits!", TrainSimpleEncryptionNumber1AlternatingSplit::encrypt("This is a test!", 3));
        $this->assertSame("This is a test!", TrainSimpleEncryptionNumber1AlternatingSplit::encrypt("This is a test!", 4));
        $this->assertSame("This is a test!", TrainSimpleEncryptionNumber1AlternatingSplit::encrypt("This is a test!", -1));
        $this->assertSame("hskt svr neetn!Ti aai eyitrsig", TrainSimpleEncryptionNumber1AlternatingSplit::encrypt("This kata is very interesting!", 1));
    }

    public function testDecrypt()
    {
//        $this->assertSame("This is a test!", TrainSimpleEncryptionNumber1AlternatingSplit::decrypt("This is a test!", 0));
        $this->assertSame("This is a test!", TrainSimpleEncryptionNumber1AlternatingSplit::decrypt("hsi  etTi sats!", 1));
        $this->assertSame("This is a test!", TrainSimpleEncryptionNumber1AlternatingSplit::decrypt("s eT ashi tist!", 2));
        $this->assertSame("This is a test!", TrainSimpleEncryptionNumber1AlternatingSplit::decrypt(" Tah itse sits!", 3));
        $this->assertSame("This is a test!", TrainSimpleEncryptionNumber1AlternatingSplit::decrypt("This is a test!", 4));
        $this->assertSame("This is a test!", TrainSimpleEncryptionNumber1AlternatingSplit::decrypt("This is a test!", -1));
        $this->assertSame("This kata is very interesting!", TrainSimpleEncryptionNumber1AlternatingSplit::decrypt("hskt svr neetn!Ti aai eyitrsig", 1));
    }

    public function testNullOrEmpty()
    {
        $this->assertSame("", TrainSimpleEncryptionNumber1AlternatingSplit::encrypt("", 0));
        $this->assertSame("", TrainSimpleEncryptionNumber1AlternatingSplit::decrypt("", 0));
        $this->assertSame(null, TrainSimpleEncryptionNumber1AlternatingSplit::encrypt(null, 0));
        $this->assertSame(null, TrainSimpleEncryptionNumber1AlternatingSplit::decrypt(null, 0));
    }
}
