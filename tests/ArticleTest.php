<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase{

    protected $article;

    protected function setUp():void{
        $this->article = new App\Article;
    }
    public function testTitleEmptyByDefault(){

        $this->assertEmpty($this->article->title);
    }

    public function testSlugEmptyNoTitle(){


        $this->assertSame($this->article->getSlug(), "");
    }
/*
    public function testSlugSpacesReplaced(){
        $this->article->title="1 3";

        $this->assertEquals("1_3",$this->article->getSlug());
    }


    public function testSlugWhiteSpacesReplacedByUnderscore(){
        $this->article->title="1     \n  3";

        $this->assertEquals("1_3",$this->article->getSlug());
    }

    public function testSlugDoesNotStartWithUnderScore(){
        $this->article->title=" 1 3 ";

        $this->assertEquals("1_3",$this->article->getSlug());
    }

    public function testSlugDoesNotHaveNobWordCharacters(){
        $this->article->title=" 1 3!# ";

        $this->assertEquals("1_3",$this->article->getSlug());
    }*/

    public function titleProvider(){
        return [
            1=>["1 3","1_3"],
            ["1     \n  3","1_3"],
            [" 1 3!# ","1_3"],
        ];
    }

    /**
     * @dataProvider titleProvider
     */
    public function testSlug($title,$slug){
        $this->article->title=$title;

        $this->assertEquals($slug,$this->article->getSlug());
    }
}