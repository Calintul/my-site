<?php 
Class One
{
    function foo()
    {
        echo "Hellofromclass One!";
    }
 
    function callMe()
    {
        $this->foo();
    }
}
 
Class Two extends One
{
    function foo()
    {
         echo "Hellofromclass Two";
 
    }
}
 
$Two = new two();
$Two->callMe();

echo '<br>';

echo "<p>GIt status</p>"

?>