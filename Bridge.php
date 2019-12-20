<?php 

interface Formatter
{
    public function format( $text);
}

class PlainTextFormatter implements Formatter
{
    public function format( $text)
    {
        return "<font color='red'>$text</font> ";
    }
}

class HtmlFormatter implements Formatter
{
    public function format( $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}
abstract class Service
{
    protected  $implementation;

    public function __construct( $printer)
    {
        $this->implementation = $printer;
    }

    public function setImplementation( $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();
}

class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}
 $service = new HelloWorldService(new HtmlFormatter());
 $info=$service->get();
 echo $info;

 $service = new HelloWorldService(new PlainTextFormatter());
 $info=$service->get('');
 echo $info;