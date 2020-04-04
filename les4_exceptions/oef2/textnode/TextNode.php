<?php

namespace textnode;

class TextNode
{
    private $text;
    private $nextNode;

    public function __construct($text)
    {
        $this->nextNode = null;
        $this->text = $text;
    }

    public static function makeNode($text)
    {
        return new self($text);
    }

    public function addNode($text) {
        if ($this->nextNode == null) {
            $this->nextNode=self::makeNode($text);
        } else {
            $this->nextNode->addNode($text);
        }
    }

    public function printAll() {
        print($this->text);
        if ($this->nextNode != null) {
            $this->nextNode->printAll();
        }
    }

    public function printElementAt(int $i)
    {
        $textNode = $this;
        for($j = 0; $j < $i; $j++) {
            if ($textNode != null) {
                $textNode = $textNode->nextNode;
            }
        }
        if ($textNode == null || $i < 0) {
            throw new \Exception("index out of range");
        } else {
            print($textNode->text);
        }
    }
}