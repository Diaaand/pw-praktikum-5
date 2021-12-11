<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap');

    h1 {
        font-family: 'Jost', sans-serif;
        text-align: center;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap');

    p {
        font-family: 'Jost', sans-serif;
        font-size: 30px;
        text-align: center;
        color: #191970;
        background-color: #B0C4DE;
    }
</style>

<body style="background-color:#F0F8FF;">
    <h1>Welcome!</h1>
    <img src="https://1.bp.blogspot.com/-tonUHy9fDEk/XnLn7EL4lvI/AAAAAAABX0k/HvgZidpGmQc7-Qe7LDsp00TfWltpuwkSwCNcBGAsYHQ/s1600/computer_mob_programming.png" class="center" style="width: 25%; height: 35%;">
    <h1>Website ini merupakan tempat dimana Anda, sang pegawai terhormat kami, untuk mengatur, mengawasi dan memonitoring Internet of Things yang berada di kantor kita.</h2>
        <br>
        <p> Apa itu Internet of Things? (IOT)
            <br>
            <br>
            Internet untuk Segala-(nya) (bahasa Inggris: Internet of Things, atau dikenal juga dengan singkatan IoT) merupakan sebuah konsep yang bertujuan untuk memperluas manfaat dari konektivitas internet yang tersambung secara terus-menerus. Adapun kemampuan seperti berbagi data, remote control, dan sebagainya, termasuk juga pada benda di dunia nyata. Contohnya bahan pangan, elektronik, koleksi, peralatan apa saja, termasuk benda hidup yang semuanya tersambung ke jaringan lokal dan global melalui sensor yang tertanam dan selalu aktif.
            <br>
            <br>
            Source : <a>https://www.techopedia.com/definition/28247/internet-of-things-iot</a>
        </p>
</body>
<?= $this->endsection(); ?>