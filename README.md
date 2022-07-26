# Release Package Response Json Customize With Inline Package.

## Dikarenakan packages ini baru dan hanya sedikit, tetapi membantu anda untuk menuliskan response secara singkat.

### Cara Install

```
composer require bayup/response
```

### Cara menggunakannya, dan pastikan ResponseJson sudah ter import:

```
return ResponseJson::successJson(200, 'Nama Kustomisasi' , $data);
```

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

### Jika mau di kustom sendiri menjadi function Helpers, berikut caranya: 

```
- App
  - Helpers
    - ResponseJson.php
```
