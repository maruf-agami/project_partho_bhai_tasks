<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <p id="demo"></p>
  <p id="demo1"></p>
</body>

</html>



<script>
  class Car {
    constructor(name, year) {
      this.namea = name;
      this.year = year;
    }
    play() {
      console.log(this.namea);
    }
  }

  function first() {
    const myCar = new Car("Ford", 2014);
    document.getElementById('demo').innerText = `${myCar.namea} ${myCar.year}`;
    console.log(myCar.namea);
    myCar.play();
  }
  first();

  function first1() {
    const myCar = new Car("Toyota", 2019);
    $('#demo1').text(`${myCar.namea} ${myCar.year}`)
    console.log(myCar.namea);

  }
  first1();
</script>