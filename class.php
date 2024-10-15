<html>
 <body>

<?php
class ball {
  // Properties
  public $color;
  public $shape;

  // Methods
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
  function set_shape($shape) {
    $this->shape = $shape;
  }
  function get_shape() {
    return $this->shape;
  }
}
$circle = new ball();
$circle->set_color('Red');
$circle->set_shape('Circle');
echo "Ball color = ".$circle->get_color().'<br>';
echo "Ball shape = ".$circle->get_shape();
?>
</body>
</html>