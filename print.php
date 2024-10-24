	<?php
	require('fpdf/fpdf.php');
	include('config.php');
	$id = $_GET['id'];

	$pdf = new FPDF();
	$pdf->AddPage();

	// Add a background color (light gray) for the entire page
	$pdf->SetFillColor(240, 240, 240);
	$pdf->Rect(0, 0, 210, 297, 'F'); // Draw a rectangle for the whole page (A4 dimensions)

	// Add a header with a larger title and a blue underline
	$pdf->SetFont('Arial', 'B', 16);
	$pdf->SetTextColor(33, 37, 41); // Darker text color
	$pdf->Cell(0, 10, 'User Profile Report', 0, 1, 'C');
	$pdf->SetDrawColor(0, 102, 204); // Blue color for the line
	$pdf->SetLineWidth(1);
	$pdf->Line(10, 20, 200, 20); // Horizontal line
	$pdf->Ln(10);

	// Date on the right side
	$pdf->SetFont('Arial', '', 10);
	$pdf->Cell(0, 10, 'Date: ' . date('d-m-Y'), 0, 1, 'R');
	$pdf->Ln(10);

	// User Profile Section
	$pdf->SetFont('Arial', 'B', 14);
	$pdf->SetTextColor(255, 255, 255); // White text for section heading
	$pdf->SetFillColor(0, 102, 204); // Blue background for section heading
	$pdf->Cell(0, 10, 'USER PROFILE', 0, 1, 'C', true);
	$pdf->Ln(5);

	// Query the user profile
	$query = "SELECT * FROM users WHERE username='$id'";
	$result = mysqli_query($mysqli, $query);
	$no = 0;

	// Display user information with alternating row colors
	while ($row = mysqli_fetch_array($result)) {
		$no = $no + 1;
		
		// Set text color back to black
		$pdf->SetTextColor(33, 37, 41);
		
		// No. field
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(50, 8, 'No.', 1, 0, 'L', true);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(140, 8, $no, 1, 1);
		
		// First Name
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(50, 8, 'First Name', 1, 0, 'L', true);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(140, 8, $row['firstname'], 1, 1);
		
		// Middle Name
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(50, 8, 'Middle Name', 1, 0, 'L', true);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(140, 8, $row['middlename'], 1, 1);
		
		// Last Name
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(50, 8, 'Last Name', 1, 0, 'L', true);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(140, 8, $row['lastname'], 1, 1);
		
		// Birth Date
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(50, 8, 'Birth Date', 1, 0, 'L', true);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(140, 8, $row['birthdate'], 1, 1);
		
		// Username
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(50, 8, 'Username', 1, 0, 'L', true);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(140, 8, $row['username'], 1, 1);
		
		// Password
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(50, 8, 'Password', 1, 0, 'L', true);
		$pdf->SetFont('Arial', '', 12);
		$pdf->Cell(140, 8, $row['password'], 1, 1);
	}

	$pdf->Output();
	?>
