<?php
use Web\BuildIn\StringFunction;
use PHPUnit\Framework\TestCase;

class StringFunctionTest extends TestCase
{
    public function testFunction()
    {
        $stringFunction = new StringFunction();
        $expected = 2;
        $actual = $stringFunction->search_string('patchi', 'tch');
        $this->assertEquals($expected, $actual);
        $expected = 6;
        $actual = $stringFunction->search_string_last('patchip', 'p');
        $this->assertEquals($expected, $actual);
        $expected = 'hi';
        $actual = $stringFunction->my_mb_substr('patchi', 4);
        $this->assertEquals($expected, $actual);
        $expected = 'とパッチ';
        $actual = $stringFunction->my_strstr('patchipとパッチ', 'と');
        $this->assertEquals($expected, $actual);
        $expected = 'パッチchi';
        $actual = $stringFunction->my_str_replace('pat', 'パッチ', 'patchi');
        $this->assertEquals($expected, $actual);
        $expected = 'paパッチ';
        $actual = $stringFunction->my_substr_replace('patipati', 'パッチ', 2);
        $this->assertEquals($expected, $actual);
        $expected = ['パッチ', 'ちっぱ', 'ぱ'];
        $actual = $stringFunction->my_explode('と', 'パッチとちっぱとぱ');
        $this->assertEquals($expected, $actual);
        $expected = 'パ       ';
        $actual = $stringFunction->my_str_pad('パ', 10);
        $this->assertEquals($expected, $actual);
        $expected = 'patchi';
        $actual = $stringFunction->my_mb_convert_case('PatChi', MB_CASE_LOWER);
        $this->assertEquals($expected, $actual);
        $expected = 'パッチ';
        $actual = $stringFunction->my_mb_convert_kana('ﾊﾟｯﾁ', 'KV');
        $this->assertEquals($expected, $actual);
        $expected = 'パッ';
        $actual = $stringFunction->my_mb_strimwidth('パッチ', 0, 4);
        $this->assertEquals($expected, $actual);
        $expected = 'パッチ';
        $actual = $stringFunction->my_trim('  パッチ  ');
        $this->assertEquals($expected, $actual);
        $expected = 9;
        $actual = $stringFunction->my_strlen('パッチ');
        $this->assertEquals($expected, $actual);
        $expected = 'patchi';
        $actual = $stringFunction->my_urlencode('patchi');
        $this->assertEquals($expected, $actual);
    }
}
