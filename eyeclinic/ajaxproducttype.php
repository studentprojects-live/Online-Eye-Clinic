<?php /* Download all student projects in www.studentprojectguide.com */ 
$q=$_GET["q"];
include("includes/conn.php");
if($q == "Lens")
{
?>
<select name="ptype2" id="ptype2">
<option value="">Select</option>
  <option value="Kryptok">Kryptok</option>
  <option value="Single Vision">Single Vision</option>
  <option value="D Bifocal">D Bifocal</option>
  <option value="Progressive">Progressive</option>
  <option value="Executive">Executive</option>
  <option value="Hi index">Hi index</option>
  <option value="Hi index HML">Hi index HML</option>
  <option value="SP2">SP2</option>
  <option value="SP2 Single Vision">SP2 Single Vision</option>
  <option value="SP2  Kryptok">SP2  Kryptok</option>
  <option value="SP2  Hi index">SP2  Hi index</option>
</select>
<?php /* Download all student projects in www.studentprojectguide.com */ 
}
else if($q == "Frames")
{
	?>
<select name="ptype2" id="ptype2">
<option value="">Select</option>
  <option value="Full">Full</option>
  <option value="Supra">Supra</option>
  <option value="Rimless">Rimless</option>
</select>
<?php /* Download all student projects in www.studentprojectguide.com */ 
}
else if($q == "Contact Lens")
{
	?>
<select name="ptype2" id="ptype2">
<option value="">Select</option>
  <option value="Regular">Regular</option>
  <option value="Disposable">Disposable</option>
  <option value="Toric">Toric</option>
  <option value="Cosmetic">Cosmetic</option>
</select>
<?php /* Download all student projects in www.studentprojectguide.com */ 
}
?>