// hitung harga paket wisata
function updateHargaPaket() {
    nilai=Number(document.getElementById("nama-paket").value); //Number digunakan untuk mengmbil nilai dari id "nama-paket"
    elemenHargaPaket=document.getElementById("harga-paket"); //akses harga paket wisata by Id
    harga=0; //inisialisasi harga awal

    // logika perhitungan
    if (nilai==1){
        harga=500000;
    }else if(nilai==2){
        harga=750000;
    }else if(nilai==3){
        harga=1000000;
    }else if(nilai==4){
        harga=1250000;
    }

    elemenHargaPaket.value=harga; //digunakan untuk set harga paket wisata
}


// hitung harga layanan tambahan

// diletakkan diatas agar variabel terbaca di semua tempat
penginapan=false;
transportasi=false;
makanan=false;

function handlePenginapan(cb) { //cb = checkbox
    penginapan=cb.checked;
    hl=document.getElementById("harga-layanan"); //hl=harga layanan
    hl.value=hitungLayanan();
}

function handleTransportasi(cb) {
    transportasi=cb.checked;
    hl=document.getElementById("harga-layanan"); 
    hl.value=hitungLayanan();
}

function handleMakanan(cb) {
    makanan=cb.checked;
    hl=document.getElementById("harga-layanan"); 
    hl.value=hitungLayanan();
}

function hitungLayanan() {
    totalLayanan=0

    // logika perhitungan
    if(penginapan) {
        totalLayanan= totalLayanan+300000;
    }if(transportasi) {
        totalLayanan= totalLayanan+200000;
    }if(makanan) {
        totalLayanan= totalLayanan+150000;
    }
    return totalLayanan;

    // variabel (penginapan) tidak diberikan pembanding karena sudah diberikan nilai false dan true di cb.checked (nilainya boolean)
    // true jika di pilih dan false jika tidak dipilih
}

// hitung total biaya paket wisata
function hitung() {
    

     hargaPaket = Number(document.getElementById("harga-paket").value);
    
     durasi = Number(document.getElementById("durasi").value);
     jumlahPeserta = Number(document.getElementById("jumlah-peserta").value);
     jumlahTagihan =document.getElementById("jumlah-tagihan");

   
    // logika hitung
    jumlah = (hargaPaket*jumlahPeserta) + ((hitungLayanan() * jumlahPeserta * durasi));
    jumlahTagihan.value = jumlah;



     //  hargaPaket = parseInt(hargaPaket) || 0;
    //  jumlahPeserta = parseInt(jumlahPeserta) || 0;
    //  hargaLayanan = parseInt(hargaLayanan) || 0;
    //  durasi = parseInt(durasi) || 0;
    
    //  hargaLayanan = document.getElementById("harga-layanan").value;
    // var hargaPaket = parseInt(document.getElementById("harga-paket").value);
    // var hargaLayanan = parseInt(document.getElementById("harga-layanan").value);
    // var durasi = parseInt(document.getElementById("durasi").value);
    // var jumlahPeserta = document.getElementById("jumlah-peserta").value;
    // jumlahTagihan = (hargaPaket + hargaLayanan) * jumlahPeserta * durasi;
    // jumlahTagihan = (hargaPaket * jumlahPeserta) + (hargaLayanan * jumlahPeserta * durasi);
    // var jumlahTagihan = parseInt(jumlahPeserta) * parseInt(durasi) * parseInt(hargaPaket) + parseInt(hargaLayanan);
    // document.getElementById("jumlah-tagihan").value = jumlahTagihan;
    // console.log(jumlahTagihan);
}
    
// function hitungTagihan() {
//     var hari = document.getElementById("durasi").value;
//     var jumlahPeserta = document.getElementById("jumlah-peserta").value;
//     var hargaPaket = document.getElementById("harga-paket").value;
//     var hargaLayanan = document.getElementById("harga-layanan").value;
//     var jumlahTagihan = parseInt(hari) * parseInt(jumlahPeserta) * parseInt(hargaLayanan) + parseInt(hargaPaket);
//     document.getElementById("total-tagihan").value = jumlahTagihan;
// }