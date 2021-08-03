    <tr style="background-color: rgb(238, 238, 238);">
      <td>
	  <p><?php echo $diakr ?></p>
	  </td>
      <td
 style="text-align: right;"
>
	  <select size="2"  class="raender form-control" style="width:auto;" form-control"  name="ru_alalc_diakr" size="3">
      <option value="1"<?php if  ($ru_alalc_diakr == "1") {echo" selected";} echo ">$erw_ja_st"?></option>
      <option value="0"<?php if  ($ru_alalc_diakr == "0") {echo" selected";} echo ">$erw_nein"?></option>
	  </select>
	  </td>
    </tr>
    <tr style="background-color: rgb(223, 223, 223);">
      <td>
	  <p><?php echo $erw_kirchen?></p>
	  </td>
      <td
 style="text-align: right;"
>
	  <select size="2"  class="raender form-control" style="width:auto;" form-control" name="ru_alalc_kirch" size="3">
      <option value="rus"<?php if  ($ru_alalc_kirch == "rus") {echo" selected";} echo ">$erw_rus"?></option>
      <option value="alt"<?php if  ($ru_alalc_kirch == "alt") {echo" selected";} echo ">$erw_alt"?></option>
	  </select>
	  </td>
    </tr>
  </tbody>
</table>
