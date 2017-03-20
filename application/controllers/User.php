<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
        // if($this->session->userdata('logged_in')) {
            $this->load->view('user');
        // } else {
        //     echo ("<SCRIPT LANGUAGE='JavaScript'>
        //       window.alert('Kamu tidak memiliki hak akses untuk mengakses halaman ini !')
        //       window.location.href='".base_url()."';
        //       </SCRIPT>");
        // }
		
	}

	public function logout(){
		session_destroy();
        ?>
                <script type="application/x-javascript">
                        document.location="<?php echo base_url()?>";
                </script>
            <?php
	}

	public function diagnosis(){
        $usia = $this->input->post('usia');
        $kelamin = $this->input->post('kelamin');
		$cp = $this->input->post('cp');
		$tekanan = $this->input->post('tekanan');
		$ecg = $this->input->post('ecg');
		$maxrate = $this->input->post('maxrate');
		$exang = $this->input->post('exang');
		$oldpeak = $this->input->post('oldpeak');
        $slope = $this->input->post('slope');
        
        if($usia<20||$usia>80){
            ?>
					<script type="application/x-javascript">
						alert('Usia harus diisi antara 20-80, tidak boleh diluar itu!');
						document.location="<?php echo base_url()?>user";
					</script>
				<?php
        }elseif($tekanan<70||$tekanan>180){
            ?>
					<script type="application/x-javascript">
						alert('Tekanan Darah harus diisi antara 70-180, tidak boleh diluar itu!');
						document.location="<?php echo base_url()?>user";
					</script>
				<?php
        }elseif($maxrate<60||$maxrate>200){
            ?>
					<script type="application/x-javascript">
						alert('Detak Jantung Maksimal harus diisi antara 60-200, tidak boleh diluar itu!');
						document.location="<?php echo base_url()?>user";
					</script>
				<?php
        }elseif($oldpeak<-3||$oldpeak>4){
            ?>
					<script type="application/x-javascript">
						alert('Oldspeak harus diisi antara -3.0 s/d 4.0, tidak boleh diluar itu!');
						document.location="<?php echo base_url()?>user";
					</script>
				<?php
        }else{
            $data['query'] = $this->pengetahuan_model->lihatData();
        $i=0;
        $min[0] = 1000;
        $max[0] = 0;
        $min[1] = 1000;
        $max[1] = 0;
        $min[2] = 1000;
        $max[2] = 0;
        $min[3] = 1000;
        $max[3] = 0;
        $min[4] = 1000;
        $max[4] = 0;
        $min[5] = 1000;
        $max[5] = 0;
        $min[6] = 1000;
        $max[6] = 0;
        $min[7] = 1000;
        $max[7] = 0;
        $min[8] = 1000;
        $max[8] = 0;
        //ambil data dari database
        foreach($data['query']->result() as $row){
            $datatest[$i][0] = $row->usia;
            
            if($datatest[$i][0]>$max[0]){
                $max[0] = $datatest[$i][0];
            }
            
            if($datatest[$i][0]<$min[0]){
                $min[0] = $datatest[$i][0];
            }
            /////---1
            $datatest[$i][1] = $row->kelamin;
            
            if($datatest[$i][1]>$max[1]){
                $max[1] = $datatest[$i][1];
            }
            
            if($datatest[$i][1]<$min[1]){
                $min[1] = $datatest[$i][1];
            }
            /////------2
            $datatest[$i][2] = $row->cp;
            
            if($datatest[$i][2]>$max[2]){
                $max[2] = $datatest[$i][2];
            }
            
            if($datatest[$i][2]<$min[2]){
                $min[2] = $datatest[$i][2];
            }
            /////-------3
            $datatest[$i][3] = $row->tekanan;
            
            if($datatest[$i][3]>$max[3]){
                $max[3] = $datatest[$i][3];
            }
            
            if($datatest[$i][3]<$min[3]){
                $min[3] = $datatest[$i][3];
            }
            //////--------4
            $datatest[$i][4] = $row->ecg;
            
            if($datatest[$i][4]>$max[4]){
                $max[4] = $datatest[$i][4];
            }
            
            if($datatest[$i][4]<$min[4]){
                $min[4] = $datatest[$i][4];
            }
            //////--------5
            $datatest[$i][5] = $row->maxrate;
            
            if($datatest[$i][5]>$max[5]){
                $max[5] = $datatest[$i][5];
            }
            
            if($datatest[$i][5]<$min[5]){
                $min[5] = $datatest[$i][5];
            }
            //////--------6
            $datatest[$i][6] = $row->exang;
            
            if($datatest[$i][6]>$max[6]){
                $max[6] = $datatest[$i][6];
            }
            
            if($datatest[$i][6]<$min[6]){
                $min[6] = $datatest[$i][6];
            }
            //////--------7
            $datatest[$i][7] = $row->oldpeak;
            
            if($datatest[$i][7]>$max[7]){
                $max[7] = $datatest[$i][7];
            }
            
            if($datatest[$i][7]<$min[7]){
                $min[7] = $datatest[$i][7];
            }
            ///////-------8
            $datatest[$i][8] = $row->slope;
            
            if($datatest[$i][8]>$max[8]){
                $max[8] = $datatest[$i][8];
            }
            
            if($datatest[$i][8]<$min[8]){
                $min[8] = $datatest[$i][8];
            }
            
            $datatest[$i][9] = $row->kelas;
            $i++;
        }
        
        /*for($j=0;$j<$i;$j++){
            for($k=0;$k<9;$k++){
                echo $datatest[$j][$k];
                echo ', ';
            }
            echo '</br>';
        }
         echo '</br></br></br>';*/
        
        /*echo $min[0].', '.$max[0].'</br>';
        echo $min[1].', '.$max[1].'</br>';
        echo $min[2].', '.$max[2].'</br>';
        echo $min[3].', '.$max[3].'</br>';
        echo $min[4].', '.$max[4].'</br>';
        echo $min[5].', '.$max[5].'</br>';
        echo $min[6].', '.$max[6].'</br>';
        echo $min[7].', '.$max[7].'</br>';
        echo $min[8].', '.$max[8].'</br>';*/
        
        //normalisasi
        for($j=0;$j<$i;$j++){
            for($k=0;$k<10;$k++){
                if($k<9){
                    $datatnorm[$j][$k]=($datatest[$j][$k]-$min[$k])/($max[$k]-$min[$k]);
                }else{
                    $datatnorm[$j][$k]=$datatest[$j][$k];
                }
            }
        }
        //normalisasi data testing
        $datatestnorm[0]=($usia-$min[0])/($max[0]-$min[0]);
        $datatestnorm[1]=($kelamin-$min[1])/($max[1]-$min[1]);
        $datatestnorm[2]=($cp-$min[2])/($max[2]-$min[2]);
        $datatestnorm[3]=($tekanan-$min[3])/($max[3]-$min[3]);
        $datatestnorm[4]=($ecg-$min[4])/($max[4]-$min[4]);
        $datatestnorm[5]=($maxrate-$min[5])/($max[5]-$min[5]);
        $datatestnorm[6]=($exang-$min[6])/($max[6]-$min[6]);
        $datatestnorm[7]=($oldpeak-$min[7])/($max[7]-$min[7]);
        $datatestnorm[8]=($slope-$min[8])/($max[8]-$min[8]);
        
        //echo '</br></br></br>';
        
        for($j=0;$j<$i;$j++){
            for($k=0;$k<10;$k++){
               // echo $datatnorm[$j][$k];
                //echo ', ';
            }
            //echo '</br>';
        }
         //echo '</br></br></br>';
        
        //cari jarak
        for($j=0;$j<$i;$j++){
            $jarak[$j] = $this->euclideanDistance($datatestnorm,$datatnorm[$j]);
        }
        
        for($j=0;$j<$i;$j++){
            //echo 'Jarak '.$j.' = '.$jarak[$j].'<br>';
        }
        
        //sorting
        asort($jarak);
        $nilaik = 9;
        $yes = 0;
        $no = 0;
        $indeks = 0;
        //hitung kelas dari k tetangga terdekat
        foreach ($jarak as $key => $val) {
        //echo "$key = $val"."<br>";
            if($indeks<$nilaik){
                if($datatnorm[$key][9]==1){
                    $yes++;
                }else{
                    $no++;
                }
            }
            $indeks++;
        }
        
        //echo 'Yes = '.$yes.'<br>'.'No = '.$no;
        //dapatkan kelas
        if($yes>$no){
            $hasil['hasil'] = 1;
        }else{
            $hasil['hasil'] = 0;
        }
        //tampilkan hasil
		$this->load->view('hasil',$hasil);
        }    
    }

    function euclideanDistance($data1,$data2)
    { 
    $distances = 0;
    
    for($j=0;$j<9;$j++){
        $distances+=pow($data1[$j]-$data2[$j],2);
    }
    
    $distances = sqrt($distances);
    
    return $distances;
    }


}