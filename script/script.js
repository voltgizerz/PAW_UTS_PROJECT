function hamburgerFunc() {
  document.getElementById('sidebar').classList.toggle('animationSideBar');
  document.getElementById('navbar').classList.toggle('animationNavbar');
  document
    .getElementById('dashboardData')
    .classList.toggle('animationDashboardData');
}

function displaySearch(e) {
  console.log(e);
  if (e.keyCode === 13) {
    var elm = document.getElementById('searchInput');
    alert('You are search for text "' + elm.value + '"');
  }
}

function validateForm() {
  var x = document.forms['myForm']['name'].value;
  var y = document.forms['myForm']['email'].value;
  var z = document.forms['myForm']['nomorHandphone'].value;
  var t = document.forms['myForm']['tanggalLahir'].value;

  //VALIDASI NAMA
  if (x == '') {
    alert('Nama must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myForm']['name'].value)) {
    alert('Nama only allowed letters and space!');
    return false;
  }

  //VALIDASI EMAIL
  if (y == '') {
    alert('Email must be filled out!');
    return false;
  } else if (
    !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
      document.forms['myForm']['email'].value
    )
  ) {
    alert('Email not Valid!');
    return false;
  }

  //VALIDASI TANGGAL LAHIR
  if (t == '') {
    alert('Tanggal Lahir must be filled out!');
    return false;
  } else if (
    !/^\d{4}[\-\/\s]?((((0[13578])|(1[02]))[\-\/\s]?(([0-2][0-9])|(3[01])))|(((0[469])|(11))[\-\/\s]?(([0-2][0-9])|(30)))|(02[\-\/\s]?[0-2][0-9]))$/.test(
      document.forms['myForm']['tanggalLahir'].value
    )
  ) {
    alert('FORMAT TANGGAL LAHIR YYYY-MM-DD ');
    return false;
  }

  //VALIDASI NO HP
  if (z == '') {
    alert('Nomor Handphone must be filled out!');
    return false;
  } else if (
    !/^[0-9]{10,13}$/.test(document.forms['myForm']['nomorHandphone'].value)
  ) {
    alert('Nomor Handphone only allowed 10-13 digits numbers!');
    return false;
  }

  //VALIDASI GENDER
  if (
    document.forms['myForm']['male'].checked == false &&
    document.forms['myForm']['female'].checked == false
  ) {
    alert('Gender must be filled out!');
    return false;
  }
}


function validateFormPembelian() {
  var x = document.forms['myForm2']['namaPembeli'].value;
  var r = document.forms['myForm2']['alamat'].value;
  var s = document.forms['myForm2']['kota'].value;
  var z = document.forms['myForm2']['nomorTelepon'].value;
  var o = document.forms['myForm2']['harga'].value;


  //VALIDASI NAMA
  if (x == '') {
    alert('Nama must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myForm2']['name'].value)) {
    alert('Nama only allowed letters and space!');
    return false;
  }

  //VALIDASI GENDER
  if (
    document.forms['myForm2']['male'].checked == false &&
    document.forms['myForm2']['female'].checked == false
  ) {
    alert('Gender must be filled out!');
    return false;
  }

  //VALIDASI ALAMAT
  if (r == '') {
    alert('Alamat must be filled out!');
    return false;
  } else if (
    !/^[#.0-9a-zA-Z\s,-]+$/g.test(document.forms['myForm2']['alamat'].value)
  ) {
    alert('Not a Valid Addrress!');
    return false;
  }

  //VALIDASI KOTA
  if (s == '') {
    alert('Kota must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myForm2']['kota'].value)) {
    alert('Kota only allowed letters and space!');
    return false;
  }

  //VALIDASI NO HP
  if (z == '') {
    alert('Nomor Handphone must be filled out!');
    return false;
  } else if (
    !/^[0-9]{10,13}$/.test(document.forms['myForm2']['nomorTelepon'].value)
  ) {
    alert('Nomor Handphone only allowed 10-13 digits numbers!');
    return false;
  }

  //VALIDASI opsi
  var v = document.getElementById('grade');
  if (v.value == '') {
    alert('Menu Opsi Merk harus dipilih!');
    return false;
  }

  //VALIDASI opsi
  var v = document.getElementById('grade1');
  if (v.value == '') {
    alert('Menu Opsi Type harus dipilih!');
    return false;
  }

  //VALIDASI opsi
  var v = document.getElementById('grade2');
  if (v.value == '') {
    alert('Menu Opsi Warna harus dipilih!');
    return false;
  }

  //VALIDASI Harga
  if (o == '') {
    alert('Harga Deal must be filled out!');
    return false;
  } else if (
    !/^!*(\d!*){10,}$/.test(document.forms['myForm2']['harga'].value)
  ) {
    alert('Harga Deal minimum 10 digits Numbers!');
    return false;
  }

}





function validateRegisterForm() {
  var x = document.forms['register']['nama'].value;
  var y = document.forms['register']['email'].value;
  var s = document.forms['register']['password'].value;
  var z = document.forms['register']['nomorHandphone'].value;

  //VALIDASI NAMA
  if (x == '') {
    alert('Nama tidak boleh kosong!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['register']['nama'].value)) {
    alert('Nama Hanya Boleh Huruf dan Spasi!');
    return false;
  }

  //VALIDASI EMAIL
  if (y == '') {
    alert('Email tidak boleh kosong!');
    return false;
  } else if (
    !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
      document.forms['register']['email'].value
    )
  ) {
    alert('Email yang anda masukan tidak valid!');
    return false;
  }

  //VALIDASI PASSWORD
  if (s == '') {
    alert('Password tidak boleh kosong!');
    return false;
  } else if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/g.test(document.forms['register']['password'].value)) {
    alert('Password Minimum eight characters, at least one letter and one number!');
    return false;
  }

  //VALIDASI NO HP
  if (z == '') {
    alert('Nomor Handphone tidak boleh kosong!');
    return false;
  } else if (
    !/^[0-9]{10,13}$/.test(document.forms['register']['nomorHandphone'].value)
  ) {
    alert('Nomor Handphone only allowed 10-13 digits numbers!');
    return false;
  }


}

function validateJualMobil() {
  var x = document.forms['myFormJualMobil']['namaPenjual'].value;
  var z = document.forms['myFormJualMobil']['tahun'].value;
  var s = document.forms['myFormJualMobil']['jarak'].value;
  var k = document.forms['myFormJualMobil']['warna'].value;
  var n = document.forms['myFormJualMobil']['harga'].value;


  //VALIDASI NAMA
  if (x == '') {
    alert('Nama must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myFormJualMobil']['namaPenjual'].value)) {
    alert('Nama only allowed letters and space!');
    return false;
  }

  //VALIDASI opsi
  var v = document.getElementById('grade');
  if (v.value == '') {
    alert('Menu Opsi Merk harus dipilih!');
    return false;
  }


  //VALIDASI NO TAHUN
  if (z == '') {
    alert('Tahun must be filled out!');
    return false;
  } else if (
    !/^(19|20)\d{2}$/.test(document.forms['myFormJualMobil']['tahun'].value)
  ) {
    alert('Tahun tidak valid! Tahun kisaran 1900-2099 ');
    return false;
  }

  //VALIDASI NO jarak
  if (s == '') {
    alert('Jarak must be filled out!');
    return false;
  } else if (
    !/^\d{4}$/.test(document.forms['myFormJualMobil']['jarak'].value)
  ) {
    alert('Jarak only allowed 4 digits numbers!');
    return false;
  }

  if (k == '') {
    alert('Warna must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myFormJualMobil']['warna'].value)) {
    alert('Warna only allowed letters and space!');
    return false;
  }

  //VALIDASI HARGA
  if (n == '') {
    alert('Harga must be filled out!');
    return false;
  } else if (
    !/^\d{10}$/.test(document.forms['myFormJualMobil']['harga'].value)
  ) {
    alert('Harga only allowed 10 digits numbers!');
    return false;
  }

  if (
    document.forms['myFormJualMobil']['bensin'].checked == false &&
    document.forms['myFormJualMobil']['listrik'].checked == false &&
    document.forms['myFormJualMobil']['diesel'].checked == false
  ) {
    alert('Bahan Bakar must be filled out!');
    return false;
  }

}



function validateFormProfile() {
  var x = document.forms['myFormProfile']['nama'].value;
  var s = document.forms['myFormProfile']['password'].value;
  var z = document.forms['myFormProfile']['nomorHandphone'].value;



  //VALIDASI NAMA
  if (x == '') {
    alert('Nama must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myFormProfile']['nama'].value)) {
    alert('Nama only allowed letters and space!');
    return false;
  }

  //VALIDASI PASSWORD
  if (s == '') {
    alert('Password tidak boleh kosong!');
    return false;
  } else if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/g.test(document.forms['myFormProfile']['password'].value)) {
    alert('Password Minimum 8 characters, at least one letter and one number!');
    return false;
  }

  if (z == '') {
    alert('Nomor Handphone tidak boleh kosong!');
    return false;
  } else if (
    !/^[0-9]{10,13}$/.test(document.forms['myFormProfile']['nomorHandphone'].value)
  ) {
    alert('Nomor Handphone only allowed 10-13 digits numbers!');
    return false;
  }

}

function validateSparepart() {
  var x = document.forms['myFormSparepart']['namaPenjual'].value;
  var y = document.forms['myFormSparepart']['namaSparepart'].value;
  var i = document.forms['myFormSparepart']['deskripsi'].value;
  var b = document.forms['myFormSparepart']['harga'].value;


  //VALIDASI NAMA
  if (x == '') {
    alert('Nama must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myFormSparepart']['namaPenjual'].value)) {
    alert('Nama only allowed letters and space!');
    return false;
  }

  //VALIDASI NAMA
  if (y == '') {
    alert('Nama Sparepart must be filled out!');
    return false;
  } else if (!/^[a-zA-Z\s]*$/g.test(document.forms['myFormSparepart']['namaSparepart'].value)) {
    alert('Nama Sparepart only allowed letters and space!');
    return false;
  }

  if (i == '') {
    alert('Masukan Deskripsi singkat!');
    return false;
  }

  if (b == '') {
    alert('Harga tidak boleh kosong!');
    return false;
  } else if (
    !/^\d+$/.test(document.forms['myFormSparepart']['harga'].value)
  ) {
    alert('Harga hanya boleh angka!');
    return false;
  }

  if (
    document.forms['myFormSparepart']['baru'].checked == false &&
    document.forms['myFormSparepart']['bekas'].checked == false
  ) {
    alert('Kondisi Barang harus dipilih!');
    return false;
  }

}




