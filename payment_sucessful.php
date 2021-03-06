

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>
  <body>




        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script type="text/javascript">
        Swal.fire(
        'Done!',
        'Payment Sucessful !',
        'success'
        ).then((result) => {
          /* Read more about handling dismissals below */
          window.location.href = "index.php";
})
        </script>
  </body>
</html>
