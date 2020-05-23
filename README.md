# Gudang

## TODO

-   [x] Auth
-   [ ] Category
    -   [x] Buat Model (database)
    -   [ ] Buat Resource Controller (handler dari routes)
    -   [ ] Register routes
    - [ ] Faker & Factory
        - Bikin Factory
        - Bikin Seeder 
-   [ ] Item

- [ ] Pasang Soft delete
- [ ] Migration alter database

## Why Laravel ?

-   Banyak hal yang udah diurus framework
    -   Kirim Email
    -   Artisan Command (mempercepat proses development)
    -   Laravel telescope (mempermudah debugging)

## Merancang Entitas

-   User
-   Category
-   Item
    -   Name
    -   Category
    -   Stock
    -   Min stock
-   Partner
    -   Name
    -   Address
    -   Phone
-   Supplier
    -   Name
    -   Address
    -   Phone
-   Inventory Bound (Pencatatan barang masuk dan keluar)
    -   type (inbound, outbound)
    -   amount
    -   Supplier
    -   Partner
    -   notes

## Packages

-   https://github.com/laravel/telescope
-   https://github.com/BenSampo/laravel-enum
-   https://github.com/spatie/laravel-activitylog

## Pertanyaan ?

-   Misal kalau ada masalah setup Laravel di local nanti bikin github issue di repo ? (Link repo nyusul)
-   Why ?
    -   Sekalian belajar Github dan kolaborasi di Github
    -   Nanti
