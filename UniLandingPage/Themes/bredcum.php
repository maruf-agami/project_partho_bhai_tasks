<div>
    <ul class="list-unstyled d-flex">
        <li style="margin-right: 10px;color: #767676;"><a href="#"
                style="color: #767676;">Home</a>&nbsp; /</li>
        <li style="margin-right: 10px;color: #767676;"><a href="#"
                style="color: #767676;">ACADEMICS</a>&nbsp; /</li>
        <li><a href="#" style="color: #767676;">UNDERGRADUATE</a></li>
    </ul>
</div>
<?php
  function first($int, $string){ //function parameters, two variables.
    return (`
    <div>
      <ul class="list-unstyled d-flex">
          <li style="margin-right: 10px;color: #767676;"><a href="#"
                  style="color: #767676;">something</a>&nbsp; /</li>
          <li style="margin-right: 10px;color: #767676;"><a href="#"
                  style="color: #767676;">ACADEMICS</a>&nbsp; /</li>
          <li><a href="#" style="color: #767676;">UNDERGRADUATE</a></li>
      </ul>
    </div>
    `);  //returns the second argument passed into the function
  }
?>