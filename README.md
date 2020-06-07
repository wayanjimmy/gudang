# Gudang

## TODO

-   [x] Auth
-   [ ] Category
    -   [x] Buat Model (database)
    -   [x] Buat Resource Controller (handler dari routes)
    -   [x] Register routes
    -   [x] Update Category Page
    -   [x] Create Category Page
    -   [x] Delete Category Page
    -   [x] Soft delete
- [ ] Setup Laravel Permission
- [ ] Item CRUD Page
- [ ] Cara override Auth

    - [x] Faker & Factory
        - [x] Bikin Factory
        - [x]Bikin Seeder 
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
