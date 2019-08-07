
<?php
//session_start();
require_once('controller/Fpdf/fpdf.php');
class PDF extends FPDF
{
// Page header

    function Header()
    {
        // Logo
        $g="Produit Acheté";
        $str = utf8_decode($g);
        $this->Image('senndokh.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title

        $this->Cell(50,10,'FACTURE');
        $this->Ln(6);
        $this->SetFont('Arial','',13);
        $this->Cell(76);
        setlocale(LC_TIME, "fr_FR.utf8","fra");
        $dt=date('d F Y');
        $this->Cell(50,10,'Du '.$dt);
        // Line break
        $this->SetFont('Arial','B',15);
        $this->Ln(25);
        $this->Cell(50,8,'Information du Client');
        $this->Ln(10);
        //$this->Cell(50,8,'Nom du client',1);
        //$this->Cell(50,8,$str,1);
        //$this->Cell(25,8,'Quantite',1);
        //$this->Cell(40,8,'Type',1);
        //$this->Ln(8);
        $this->SetFont('Arial','',13);
        //$this->Cell(50,8,"".$_SESSION['nomc'],1);
        //$this->Cell(50,8,''.$_SESSION['nomp'],1);
        //$this->Cell(25,8,''.$_SESSION['qt'],1);
        //$this->Cell(40,8,''.$_SESSION['type'],1);
        $this->Cell(50,8,utf8_decode("Carte d'Identité : ").$_GET['car']);
        $this->Ln(8);
        $this->Cell(50,8,utf8_decode("Prénom : ").$_GET['pn']);
        $this->Ln(8);
        $this->Cell(50,8,"Nom : ".$_GET['nm']);
        $this->Ln(8);
        $this->Cell(50,8,"Village : ".$_GET['vil']);
        $this->Ln(8);
        $this->Cell(50,8,"Adresse : ".$_GET['adr']);
        $this->Ln(8);
        $this->Cell(50,8,utf8_decode("Téléphone : ").$_GET['tl']);




        //$this->Ln(20);
        //$this->SetX(10);
        //$this->SetFont('Arial','UB',15);
        //$this->Cell(43,8,utf8_decode('Montant réglé :'));
        //$this->SetFont('Arial','',13);
        //$this->Cell(80,8,$_SESSION['mntr']);
        // $this->Ln(8);
        //$this->SetFont('Arial','UB',15);
        //$this->Cell(43,8,'Montant total :');
        //$this->SetFont('Arial','',13);
        //$this->Cell(80,8,$_SESSION['mntg']);

        $this->Ln(20);
        $this->Cell(65);
        $this->SetFont('Arial','B',15);
        $this->Cell(50,8,utf8_decode('Republique du Sénégal'));
        $this->SetFont('Arial','',13);
        $this->Ln(10);
        $this->Cell(40);
        $this->Cell(50,8,utf8_decode("Nous avons relevé votre compteur d'eau le ").$_GET['ed']);
        $this->Ln(20);
        $this->Cell(45);
        $this->SetFont('Arial','UB',15);
        $this->SetTextColor(1,162,232);
        $this->Cell(50,8,utf8_decode("TALON A JOINDRE A VOTRE PAIEMENT"));
        $this->Ln(20);
        $this->SetTextColor(0,0,0);
        $this->SetFont('Arial','B',12);
        $this->Cell(30,8,utf8_decode('N° FACTURE:'));
        $this->SetFont('Arial','',11);
        $this->Cell(40,8,$_GET['nfac']);
        $this->Ln(8);
        $this->SetFont('Arial','B',12);
        $this->Cell(34,8,utf8_decode('N° COMPTEUR:'));
        $this->SetFont('Arial','',11);
        $this->Cell(40,8,$_GET['num']);
        $this->Ln(8);
        $this->SetFont('Arial','B',12);
        $this->Cell(50,8,utf8_decode('CONSOMMATION EN CHIFFRE:'));
        $this->SetFont('Arial','',11);
        $this->Cell(15);
        $this->Cell(40,8,$_GET['cons']." Littre");
        $this->Ln(8);
        $this->SetFont('Arial','B',12);
        $this->Cell(50,8,utf8_decode('CONSOMMATION EN LETTRE:'));
        $this->SetFont('Arial','',11);
        $this->Cell(15);
        $this->Cell(40,8,$_GET['conslet']);
        $this->Ln(8);
        $this->SetFont('Arial','B',12);
        $this->Cell(50,8,utf8_decode('PERIODE DE CONSOMMATION:'));
        $this->SetFont('Arial','',11);
        $this->Cell(15);
        $this->Cell(40,8,$_GET['prd']);
        $this->Ln(20);
        $this->Cell(120);
        $this->SetFont('Arial','B',12);
        $this->Cell(50,8,utf8_decode("PRIX 1L:"));
        $this->SetFont('Arial','',11);
        $this->Cell(10,8,"325    CFA");
        $this->Ln(8);
        $this->Cell(120);
        $this->SetFont('Arial','B',12);
        $this->Cell(50,8,utf8_decode("TOTAL A REGLER:"));
        $this->SetFont('Arial','',11);
        $this->Cell(10,8,$_GET['mt']." CFA");


        $this->Ln(50);
        $this->Cell(60);
        $this->SetFont('Arial','I',12);
        $this->Cell(10,8,"*".$_GET['numabonnement']."*");

        //$this->Ln(6);
        //$this->Cell(40);
        //$this->Cell(50,8,utf8_decode("pour la période du ").$_GET['prd'].utf8_decode(" passée"));

        /*$this->Ln(30);
        $this->SetFont('Arial','I',13);
        $this->Cell(80,8,"Merci de votre confiance . Si vous avez des questions envoyez-nous un mail a l'adresse");
        $this->Ln(8);
        $this->SetTextColor(1,162,232);
        $this->Cell(80,8,"gestechent@gmail.com.");
        $this->SetTextColor(0,0,0);
        $this->Ln(20);
        $this->Cell(80,8,"Made By The Web Boy");*/
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Output();
?>
