<form id="snippet--select-container" class="row">
    <div class="col-lg-6 col-md-6 mb-2 mt-2">
        <span><i class="fa fa-globe"></i></span>
        <select id="select-country" name="country" class="hasCustomSelect">
            <option value="">-choose country-</option>
            <?php foreach ($all_contry_key as $all_contry_data) : ?>
            <option value="<?= $all_contry_data->country_name ?>"><?= $all_contry_data->country_name ?></option>
            <?php endforeach ; ?>
        </select>
    </div>
    
    <div class="col-lg-6 col-md-6 mb-2 mt-2">
        <span><i class="fa fa-map-marker"></i></span>
        <select id="select-city" name="city" class="hasCustomSelect" >
            <option value="">-choose city-</option>
            <?php if (isset($city_key)) : ?>
                <?php foreach ($city_key as $city_data) : ?>
                    <option value="<?= $city_data->city_name ?>"><?= $city_data->city_name ?></option>
                <?php endforeach ; ?> ?>
            <?php endif ; ?>
        </select>
    </div>
</form>