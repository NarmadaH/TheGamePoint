<?php
require('WriteHTML.php');

$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
$pdf->Image('umisf.jpg',18,13,33);
$pdf->SetFont('Arial','B',16);
$pdf->WriteHTML('<para><h1>-------------------------  UMiSF 2016  ---------------------</h1><br>
 <para></para></para><br><br>Inter School Entry');

//Website: <u>www.badmintonmora.org</u></para><br><br>How to Convert HTML to PDF with fpdf example');

$pdf->SetFont('Arial','B',11);
$htmlTable='<TABLE>
<TR>
<TD>Name:</TD>
<TD>'.$_POST['player-name'].'</TD>
</TR>
<TR>
<TD>School:</TD>
<TD>'.$_POST['school'].'</TD>
</TR>
<TR>
<TD>Gender:</TD>
<TD>'.$_POST['player-gender'].'</TD>
</TR>
<TR>
<TD>Date of Birth:</TD>
<TD>'.$_POST['player-dob'].'</TD>
</TR>
<TR>
<TD>Contact No:</TD>
<TD>'.$_POST['player-phone-no'].'</TD>
</TR>
<TR>
<TD>E-mail:</TD>
<TD>'.$_POST['email'].'</TD>
</TR>
<TR>
<TD>Event 1:</TD>
<TD>'.$_POST['singles-select'].'</TD>
</TR>
<TR>
<TD><U>     *Age Catagory:</U></TD>
<TD>'.$_POST['single-age-group'].'</TD>
</TR>
<TR>
<TD>Event 2:</TD>
<TD>'.$_POST['doubles-select'].'</TD>
</TR>

<TR>
<TD><U>     *Age Catagory:</U></TD>
<TD>'.$_POST['doubles-age-group'].'</TD>
</TR>

<TR>
<TD><U>     *Partner:</U></TD>
<TD>'.$_POST['double-partner-name'].'</TD>
</TR>

<TR>
<TD><U>     *Partner School:</U></TD>
<TD>'.$_POST['partner-school'].'</TD>
</TR>

<TR>
<TD></TD>
<TD></TD>
</TR>

<TR>
<TD>PAST PERFORMANCES</TD>
<TD></TD>
</TR>



<TR>
<TD>*Junior National Rank</TD>
<TD>Under '.$_POST['rank-age'].'  '.$_POST['player-rank'].'</TD>
</TR>

<TR>
<TD>*'.$_POST['tournament1'].'</TD>
<TD>Under '.$_POST['year1'].'  '.$_POST['event1'].' '.$_POST['place1'].'</TD>
</TR>


<TR>
<TD>*'.$_POST['tournament2'].'</TD>
<TD>Under '.$_POST['year2'].'  '.$_POST['event2'].' '.$_POST['place2'].'</TD>
</TR>


</TABLE>';
$pdf->WriteHTML2("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',6);
$pdf->Output(); 
?>