<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />

    <title>Document</title>
  </head>
  <body>
    <style>
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        @media print {
	nav,
	header {
		display: none;
	}
}
    </style>
  <?php include('header.php'); ?>






<section class="table-data">
  <div style="text-align: center;margin-top: 7px;">ST PATRICK CATHOLIC CHURCH REPORTS</div>
  <div style="text-align: center;margin-bottom: 10px;">p.o box 1298-655 Thika</div>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>PAYID</th>
            <th>EMAIL</th>
            <th>NAME</th>
            <th>CATEGORY</th>
            <th>DATE</th>
            <th>AMOUNT</th>
          </tr>
        </thead>

        <tbody>
          <?php $payments = get_payments(); ?>
          <?php foreach ($payments as $payment): ?>
          <tr>
            <td><?php echo $payment['id'] ?></td>
            <td><?php echo $payment['payId'] ?></td>
            <td><?php echo $payment['email'] ?></td>
            <td><?php echo $payment['name'] ?></td>
            <td><?php echo $payment['category'] ?></td>
            <td><?php echo $payment['date'] ?></td>
            <td><?php echo $payment['amount']*100 ?></td>

          </tr>
          <?php endforeach ?>
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>TOTAL</td>
              <?php $payments = all_payments(); ?>
        <?php 
      $total = array_sum(array_column($payments, 'amount', 'name'));
       ?>             
        <td style="font-weight: bold;font-size: 29px;">KES <?php echo ($total*100) ?></td>
          </tr>
        </tbody>
      </table>
    </section>

    </body>
</html>
