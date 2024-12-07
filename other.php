<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customizable DataTable</title>
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- DataTables CSS -->
  <link href="https://cdn.jsdelivr.net/npm/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">

  <!-- DataTables Buttons CSS (For export buttons) -->
  <link href="https://cdn.jsdelivr.net/npm/datatables.net-buttons-dt/css/buttons.dataTables.min.css" rel="stylesheet">
</head>
<body>

  <div class="container my-4">
    <h2 class="text-center">Customizable DataTable Example</h2>
    
    <table id="myTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start Date</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Airi Satou</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>33</td>
          <td>2008/11/28</td>
          <td>$162,700</td>
        </tr>
        <tr>
          <td>Brielle Williamson</td>
          <td>Integration Specialist</td>
          <td>New York</td>
          <td>61</td>
          <td>2012/12/02</td>
          <td>$372,000</td>
        </tr>
        <!-- Add more rows here -->
      </tbody>
    </table>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- DataTables JS -->
  <script src="https://cdn.jsdelivr.net/npm/datatables.net/js/jquery.dataTables.min.js"></script>

  <!-- DataTables Buttons JS (For export buttons) -->
  <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jszip@3.1.3/dist/jszip.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/pdfmake@0.1.53/build/pdfmake.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/pdfmake@0.1.53/build/vfs_fonts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/datatables.net-buttons/js/buttons.print.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable({
        paging: true,               // Enable pagination
        pageLength: 5,              // Default number of rows per page
        ordering: true,             // Enable sorting
        order: [[0, 'asc']],        // Default sort by the first column in ascending order
        responsive: true,           // Enable responsive layout
        dom: 'Bfrtip',              // Buttons layout
        buttons: [                  // Export buttons
          'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      });
    });
  </script>

</body>
</html>
