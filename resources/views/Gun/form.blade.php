<style>
    .my-form {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.15);
    }

    .form-group select {
        background-color: #fff;
    }

    .form-submit {
        margin-top: 30px;
        text-align: right;
    }

    .form-submit button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-submit button:hover {
        background-color: #0056b3;
    }

</style>


<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name', $gun->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="brand">Brand</label>
    <select name="brand" id="brand">
        <option value="Glock" {{ old('brand', $gun->brand ?? '') == 'Glock' ? 'selected' : '' }}>Glock</option>
        <option value="Colt" {{ old('brand', $gun->brand ?? '') == 'Colt' ? 'selected' : '' }}>Colt</option>
        <option value="Beretta" {{ old('brand', $gun->brand ?? '') == 'Beretta' ? 'selected' : '' }}>Beretta</option>
        <option value="Desert Eagle" {{ old('brand', $gun->brand ?? '') == 'Desert Eagle' ? 'selected' : '' }}>Desert Eagle</option>
    </select>
</div>

<div class="form-group">
    <label for="caliber">Caliber</label>
    <select name="caliber" id="caliber">
        <option value="9mm" {{ old('caliber', $gun->caliber ?? '') == '9mm' ? 'selected' : '' }}>9mm</option>
        <option value=".357 Magnum" {{ old('caliber', $gun->caliber ?? '') == '.357 Magnum' ? 'selected' : '' }}>.357 Magnum</option>
        <option value=".50 AE" {{ old('caliber', $gun->caliber ?? '') == '.50 AE' ? 'selected' : '' }}>.50 AE</option>
    </select>
</div>

<div class="form-group">
    <label for="magazine">Magazine</label>
    <select name="magazine" id="magazine">
        <option value="17" {{ old('magazine', $gun->magazine ?? '') == '17' ? 'selected' : '' }}>17 Rounds</option>
        <option value="6" {{ old('magazine', $gun->magazine ?? '') == '6' ? 'selected' : '' }}>6 Rounds</option>
        <option value="15" {{ old('magazine', $gun->magazine ?? '') == '15' ? 'selected' : '' }}>15 Rounds</option>
        <option value="7" {{ old('magazine', $gun->magazine ?? '') == '7' ? 'selected' : '' }}>7 Rounds</option>
    </select>
</div>  

<div class="form-group">
    <label for="price">Price</label>
    <input type="text" name="price" value="{{ old('price', $gun->price ?? '') }}" required>
</div>


