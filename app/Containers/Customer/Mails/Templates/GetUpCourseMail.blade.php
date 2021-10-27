<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>

    <div>
      <p>Hello {{$customer->full_name}},</p>
      <p>Please click on the <a target="_blank" href="{{url($customer->uid)}}"> link </a> below to continue</p>
      <p>Register by ID: {{$customer->uid}} </p>
    </div>

  </body>
</html>
