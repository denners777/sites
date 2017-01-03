<div class="box grid_16" style="padding: 5px;">

    <button class="light" type="button" href="<?php echo site_url("admin/hoteis/"); ?>">
    <?php echo img(THEMEASETS . 'images/icons/small/grey/home.png'); ?>
    </button>
    
    <button class="blue  has_text" type="button" href="<?php echo site_url("admin/hoteis/editar/{$HotelSlug}"); ?>">
    <?php echo img(THEMEASETS . 'images/icons/small/grey/pencil.png'); ?>
        <span>Editar Hotel</span>
    </button>
    
    <button class="orange has_text" type="button" href="<?php echo site_url("admin/skins/{$HotelSlug}"); ?>">
        <span>ID Visual</span>
    </button>
    
    <button class="red has_text" type="button" href="<?php echo site_url("admin/hoteis/galerias/{$HotelSlug}"); ?>">
        <span>Galeria</span>
    </button>
    
    <button class="grey has_text" type="button" href="<?php echo site_url("admin/staff/galerias/{$HotelSlug}"); ?>">
        <span>Staff</span>
    </button>
    
    <button class="black has_text" type="button" href="<?php echo site_url("admin/servicios/{$HotelSlug}"); ?>">
        <span>Servicios</span>
    </button>
    
    <button class="navy has_text" type="button" href="<?php echo site_url("admin/mapas/{$HotelSlug}"); ?>">
        <span>Mapas</span>
    </button>
    
    <button class="green  has_text" type="button" href="<?php echo site_url("admin/hoteis/habitaciones/{$HotelSlug}"); ?>">
        <span>Habitaciones</span>
    </button>

</div>