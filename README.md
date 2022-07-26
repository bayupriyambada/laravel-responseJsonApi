# Release Package Response Json Customize With Inline Package.

## Dikarenakan packages ini baru dan hanya sedikit, tetapi membantu anda untuk menuliskan response secara singkat.

### Cara Install

```
composer require bayup/response
```
- - -

### Cara menggunakannya, dan pastikan ResponseJson sudah ter import:
```
return ResponseJson::successJson(200, 'Nama Kustomisasi' , $data);
```
- - -

### Hasil Json Success, sebagai contoh dengan data sesuai dengan datamu:
```
{
    "code": 200,
    "message": "Success get data",
    "data": [
        {
            "json_result_id": "87c78214-c6b8-41e5-8305-62749713954e",
            "json_test": "Test result json kustom",
            "dikirim_pada": "2022-07-25 23:20:12",
        }
    ]
}
```
- - -

### Jika mau di kustom sendiri menjadi function Helpers, berikut caranya: 
```
- App
  - Helpers
    - ResponseJson.php
    [Copy Paste File ResponseJson.php pada packages]
    [Ubah namespace bayup\response] => [App\Helpers]
```

- - -

### Kostum $message pada Json Menggunakan Helpers Constanta bersama CONST:
```
- App
  - Helpers
    - ResponseJson.php
    - ConstantaText.php

<?php

namespace App\Helpers;

class ConstantaText {
  CONST NAMA_TEXT = 'Halo kustom text contoh jika dipakai berulang';
}

```
```
return ResponseJson::successJson(200, ConstantaText::NAMA_TEXT , $data);
```

### Hasil Kustomisasi menggunakan ConstantaText:
```
{
    "code": 200,
    "message": "Halo kustom text contoh jika dipakai berulang",
    "data": [
        {
            "json_result_id": "87c78214-c6b8-41e5-8305-62749713954e",
            "json_test": "Test result json kustom",
            "dikirim_pada": "2022-07-25 23:20:12",
        }
    ]
}
```
- - -

Jika terjadi kesalahan, tidak jalan silahkan laporkan ke discord personal saya <https://discord.com/channels/@me/975941139662254100>




