---
layout: default
title: Skin Database - DDraceNetwork
---

<style>
  input[type="text"], input[type="button"] {
    border: none;
    border: 1px solid rgba(0, 0, 0, 0.5);
  }
  input:focus-visible {
    outline: none;
  }

  .modifyskinpopup{
    z-index: 100;
    display: none;
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(128, 128, 128, 1.0);
    padding: 20px; border-radius: 7px;
  }
  @supports (backdrop-filter: none) {
    .modifyskinpopup {
      background-color: rgba(128, 128, 128, 0.5);
      backdrop-filter: blur(8px);
    }
  }

  table td {
    margin: 0;
    padding: 0;
    height: 70px;
  }

  .ourgriditem1 {
    width: 96px;
  }
  .ourgriditem2 {
    width: 192px;
  }
  .ourgriditem3 {
    width: 112px;
  }
  .ourgriditem4 {
    width: 112px;
  }
  .ourgriditem5 {
    width: 112px;
  }
  .ourgriditem6 {
    width: 128px;
  }
  .ourgriditem7 {
    width: 112px;
  }
  .ourgriditem8 {
    width: 112px;
  }
  .ourgriditem9 {
    width: 192px;
  }

  .ourgriditem {
    display: inline-block;
    overflow-wrap: anywhere;
  }

  .ourgriditemheader {
    display: inline-block;
    overflow-wrap: anywhere;
    height: 100%;
    background-color: var(--bg-block);
  }
  html, body {
    height: 100%;
  }
  .vrow {
    width: max-content;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: left;
  }
</style>

<div id="addskinpopup" class="modifyskinpopup">
  <form action="edit/modify_skin.php" method="post" enctype="multipart/form-data" style="margin: 0;">
  <table cellpadding="5" style="margin: 0;">
  <tr><td>Image</td><td><input name="image" type="file"></td></tr>
  <tr><td>Creator</td><td><input name="creator" type="text"></td></tr>
  <tr><td>Skin pack</td><td><input name="skin_pack" type="text"></td></tr>
  <tr><td>License</td><td><input name="skin_license" type="text" placeholder="unknown"></td></tr>
  <tr><td>Type</td><td><select name="skin_type"><option value="normal" selected>normal</option><option value="community">community</option></select></td></tr>
  <tr><td>Is UHD</td><td><input type="checkbox" name="skinisuhd" /></td></tr>
  </table>
  <input name="game_version" type="hidden" value="tw-0.6">
  <input name="skin_part" type="hidden" value="full">
  <input name="modifyaction" type="hidden" value="add">
  <div style="display: flex; width: 100%">
    <input type="submit" value="Add skin">
    <input type="button" value="Cancel" onclick="OpenAddSkin();" style="margin-left: auto;">
  </div>
  </form>
</div>

<div id="addskinzippopup" class="modifyskinpopup">
  <form action="edit/modify_skin.php" method="post" enctype="multipart/form-data" style="margin: 0;">
  <table cellpadding="5" style="margin: 0;">
  <tr><td>Creator</td><td><input name="creator" type="text"></td></tr>
  <tr><td>Skin pack</td><td><input name="skin_pack" type="text"></td></tr>
  <tr><td>License</td><td><input name="skin_license" type="text" placeholder="unknown"></td></tr>
  <tr><td>Type</td><td><select name="skin_type"><option value="normal" selected>normal</option><option value="community">community</option></select></td></tr>
  <tr><td>Is UHD</td><td><input type="checkbox" name="skinisuhd" /></td></tr>
  </table>
  <input name="game_version" type="hidden" value="tw-0.6">
  <input name="skin_part" type="hidden" value="full">
  <input name="modifyaction" type="hidden" value="add">
  <div id="addskinziphidden"></div>
  <div style="display: flex; width: 100%">
    <input type="submit" value="Add skins">
    <input type="button" value="Cancel" onclick="OpenAddSkinZip();" style="margin-left: auto;">
  </div>
  </form>
</div>

<div id="addskinzipextractpopup" class="modifyskinpopup">
  <form action="javascript:ExtractSkinZip()" method="post" enctype="multipart/form-data" style="margin: 0;">
  <table cellpadding="5" style="margin: 0;">
  <tr><td>ImageZip</td><td><input id="addskinzipextractzip" name="image" type="file"></td></tr>
  </table>
  <div style="display: flex; width: 100%">
    <input type="submit" value="Extract skin zip">
    <input type="button" value="Cancel" onclick="OpenAddSkinZipExtract();" style="margin-left: auto;">
  </div>
  </form>
</div>

<div id="changeskinpopup" class="modifyskinpopup">
  <form action="edit/modify_skin.php" method="post" enctype="multipart/form-data" style="margin: 0;">
  <table cellpadding="5" style="margin: 0;">
  <tr><td>Skin</td><td><input id="changeskinname" name="skin_name2" type="text" disabled></td></tr>
  <tr><td>Creator</td><td><input id="changeskincreator" name="creator" type="text"></td></tr>
  <tr><td>Skin pack</td><td><input id="changeskinskinpack" name="skin_pack" type="text"></td></tr>
  <tr><td>
    License</td><td><input id="changeskinlicense" name="skin_license" type="text" placeholder="unknown"></td></tr>
  <tr><td>Type</td><td><select name="skin_type" id="changeskinskintype"><option value="normal" selected>normal</option><option value="community">community</option></select></td></tr>
  </table>
  <input id="changeskinname2" name="skin_name_list[0]" type="hidden" value="">
  <input id="changeskinimg" name="skin_list[0]" type="hidden" value="">
  <input name="skinisuhd" type="hidden" value="false">
  <input name="game_version" type="hidden" value="tw-0.6">
  <input name="skin_part" type="hidden" value="full">
  <input name="modifyaction" type="hidden" value="add">
  <div style="display: flex; width: 100%">
    <input type="submit" value="Change Skin">
    <input type="button" value="Cancel" onclick="OpenChangeSkin();" style="margin-left: auto;">
  </div>
  </form>
</div>

<div id="removeskinpopup" class="modifyskinpopup">
  <form action="edit/modify_skin.php" method="post" enctype="multipart/form-data" style="margin: 0;">
  <table cellpadding="5" style="margin: 0;">
  <tr><td>Skin</td><td><input id="removeskinname" name="skin_name2" type="text" disabled></td></tr>
  </table>
  <input name="skinisuhd" type="hidden" value="false">
  <input id="removeskinname2" name="skin_name" type="hidden" value="">
  <input name="modifyaction" type="hidden" value="delete">
  <div style="display: flex; width: 100%">
    <input type="submit" value="Remove Skin">
    <input type="button" value="Cancel" onclick="OpenRemoveSkin();" style="margin-left: auto;">
  </div>
  </form>
</div>

<script src="tee.js"></script>
<script src="jszip.min.js"></script>
<script src="FileSaver.js"></script>
<script src="vlist.js"></script>
<div class="block" id="contentblock">

<div style="display: flex; align-items: center;">
  <h2 id="skin-database" style="display:inline; flex: 0 0 auto; margin-top: 5px;">Skin Database</h2>
  <div style="display: flex; justify-content: center; align-items: center; flex: 1 1 auto;">
    <input type="text" id="skinsearch" placeholder="Search skin" style="width: 100%; max-width: 300px; border-right: none; border-radius: 0px; border-top-left-radius: 4px; border-bottom-left-radius: 4px;" oninput="SearchInpChanged();">
    <input type="button" value="Reset filter" onclick="SetLocationParams('', 'name', 'down');" style="border-left: none; border-radius: 0px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">
  </div>
  <div style="flex: 0 0 auto; font-size:10px">
  <div id="edit_mode">
    <a href="javascript:ToggleEditMode(true);">edit mode</a>
  </div>
  </div>
</div>

<h3 id="skin_download_link"></h3>

<script>
  var IsSkinAddOpen = false;
  var IsSkinAddZipOpen = false;
  var IsSkinAddZipExtractOpen = false;
  var IsSkinChangeOpen = false;
  var IsSkinRemoveOpen = false;
  var gIsEditMode = false;

  function OpenAddSkin() {
    var AddSkinPopup = document.getElementById("addskinpopup");
    if(!IsSkinAddOpen)
      AddSkinPopup.style.display = "block";
    else
      AddSkinPopup.style.display = "none";

    IsSkinAddOpen = !IsSkinAddOpen;
  }

  function OpenAddSkinZipExtract() {
    var AddSkinPopup = document.getElementById("addskinzipextractpopup");
    if(!IsSkinAddZipExtractOpen)
      AddSkinPopup.style.display = "block";
    else
      AddSkinPopup.style.display = "none";

    IsSkinAddZipExtractOpen = !IsSkinAddZipExtractOpen;
  }

  function ExtractSkinZip() {
    OpenAddSkinZipExtract();
    var ZipContent = document.getElementById("addskinzipextractzip");

    var ZipList = document.getElementById("addskinziphidden");
    var InnerHTML = "";
    JSZip.loadAsync(ZipContent.files[0]).then((FileContent) => {
      var Counter = 0;
      var CountDec = Object.keys(FileContent.files).length;
      Object.keys(FileContent.files).map((FileVal) => {
        FileContent.files[FileVal].async("base64").then((StrVal) => {
          InnerHTML += "<input name=\"skin_list[" + Counter.toString() + "]\" type=\"hidden\" value=\"" + StrVal + "\">";
          InnerHTML += "<input name=\"skin_name_list[" + Counter.toString() + "]\" type=\"hidden\" value=\"" + FileVal + "\">";
          ++Counter;
          --CountDec;
          if(CountDec == 0) {
            ZipList.innerHTML = InnerHTML;
          }
        });
      });
      OpenAddSkinZip();
    });
  }

  function OpenAddSkinZip() {
    var AddSkinPopup = document.getElementById("addskinzippopup");
    if(!IsSkinAddZipOpen)
      AddSkinPopup.style.display = "block";
    else
      AddSkinPopup.style.display = "none";

    IsSkinAddZipOpen = !IsSkinAddZipOpen;
  }

  function OpenChangeSkin(ChangeSkinNamePure, ChangeSkinName, ChangeSkinType, ChangeSkinCreator, ChangeSkinSkinPack, ChangeSkinLicense) {
    var AddSkinPopup = document.getElementById("changeskinpopup");
    if(!IsSkinChangeOpen)
      AddSkinPopup.style.display = "block";
    else
      AddSkinPopup.style.display = "none";

    if(ChangeSkinName != undefined) {
      document.getElementById("changeskinname").value = ChangeSkinName;
      document.getElementById("changeskinname2").value = ChangeSkinName;
      document.getElementById("changeskincreator").value = ChangeSkinCreator;
      document.getElementById("changeskinskinpack").value = ChangeSkinSkinPack;
      document.getElementById("changeskinlicense").value = ChangeSkinLicense;
      document.getElementById("changeskinskintype").value = ChangeSkinType;
      let HasSkinImg = false;
      if(SkinMap.has(ChangeSkinNamePure)) {
        let SkinImg = SkinMap.get(ChangeSkinNamePure);
        if(SkinImg.Loaded > 0) {
          document.getElementById("changeskinimg").value = SkinImg.ImgData;
          HasSkinImg = true;
        }
      }
      if(!HasSkinImg)
        alert("Skin was not loaded yet. Try again.");
    }

    IsSkinChangeOpen = !IsSkinChangeOpen;
  }

  function OpenRemoveSkin(RemoveSkinName) {
    var AddSkinPopup = document.getElementById("removeskinpopup");
    if(!IsSkinRemoveOpen)
      AddSkinPopup.style.display = "block";
    else
      AddSkinPopup.style.display = "none";

    document.getElementById("removeskinname").value = RemoveSkinName;
    document.getElementById("removeskinname2").value = RemoveSkinName;

    IsSkinRemoveOpen = !IsSkinRemoveOpen;
  }

  function ToggleEditMode(IsEditMode) {
    var EditModeButton = document.getElementById("edit_mode");
    var InnerHTML = "";
    gIsEditMode = IsEditMode;
    if(IsEditMode) {
      InnerHTML += "<a href=\"javascript:OpenAddSkin();\">add skin</a>";
      InnerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      InnerHTML += "<a href=\"javascript:OpenAddSkinZipExtract();\">add skin zip</a>";
      InnerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      InnerHTML += "<a href=\"javascript:ToggleEditMode(false);\">normal mode</a>";
    }
    else {
      InnerHTML += "<a href=\"javascript:ToggleEditMode(true);\">edit mode</a>";
      if(IsSkinRemoveOpen)
        OpenRemoveSkin();
      if(IsSkinChangeOpen)
        OpenChangeSkin();
      if(IsSkinAddZipOpen)
        OpenAddSkinZip();
      if(IsSkinAddZipExtractOpen)
        OpenAddSkinZipExtract();
      if(IsSkinAddOpen)
        OpenAddSkin();
    }

    EditModeButton.innerHTML = InnerHTML;
    DrawSkinList();
  }

  function documentIsReady(FuncCB) {
    if (document.readyState === "complete" || document.readyState === "interactive") {
        setTimeout(FuncCB, 1);
    } else {
        document.addEventListener("DOMContentLoaded", FuncCB);
    }
  }

  function GetParams(qs) {
    qs = qs.split("+").join(" ");
    var params = {},
        tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
      params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
    }

    return params;
  }

  var JS_GET = GetParams(document.location.search);

  function GetTableHeaderNameInline(SortName, DisplayName) {
    var Ret = "'', '')";
    if (JS_GET['sort'] == SortName && JS_GET['dir'] == "down")
      Ret = "'" + SortName + "', 'up')";
    else
      Ret = "'" + SortName + "', 'down')";

    if (JS_GET['sort'] == SortName) {
      if (JS_GET['dir'] == "down")
        Ret += "\">" + DisplayName + " ▾";
      if (JS_GET['dir'] == "up")
        Ret += "\">" + DisplayName + " ▴";
    } else {
      Ret += "\">" + DisplayName + "&nbsp;&nbsp;";
    }
    return Ret;
  }

  function SetLocationParams(SearchStr, SortStr, DirStr) {
    var SearchInp = document.getElementById("skinsearch");
    SearchInp.value = SearchStr;
    JS_GET['search'] = SearchStr;
    JS_GET['sort'] = SortStr;
    JS_GET['dir'] = DirStr;

    var Params = "?";
    if(SearchStr != "")
      Params += "search=" + encodeURIComponent(SearchStr) + "&";
    if(SortStr != "" && SortStr != "name")
      Params += "sort=" + encodeURIComponent(SortStr) + "&";
    if(DirStr != "" && DirStr != "down")
      Params += "dir=" + encodeURIComponent(DirStr) + "&";

    if(Params.endsWith("&"))
      Params = Params.substring(0, Params.length - 1);
    
    if(Params == "?")
      Params = "";
    window.history.replaceState({}, "param_changed", "index.php" + Params);

    DrawSkinList();
  }

  function SearchInpChanged() {
    var SearchInp = document.getElementById("skinsearch");
    var SearchStr = SearchInp.value;
    SetLocationParams(SearchStr, JS_GET['sort'], JS_GET['dir']);
  }

  function GetSearchStrAndMode() {
    var SearchStr = JS_GET['search'];
    var SearchMode = "";
    if(SearchStr.startsWith("$creator:")) {
      SearchStr = SearchStr.replace("$creator:", "");
      SearchMode = "creator";
    }
    else if(SearchStr.startsWith("$skinpack:")) {
      SearchStr = SearchStr.replace("$skinpack:", "");
      SearchMode = "skinpack";
    }
    else if(SearchStr.startsWith("$skin:")) {
      SearchStr = SearchStr.replace("$skin:", "");
      SearchMode = "skin";
    }
    else if(SearchStr.startsWith("$type:")) {
      SearchStr = SearchStr.replace("$type:", "");
      SearchMode = "type";
    }
    else if(SearchStr.startsWith("$license:")) {
      SearchStr = SearchStr.replace("$license:", "");
      SearchMode = "license";
    }
    else if(SearchStr.startsWith("$uhd:")) {
      SearchStr = SearchStr.replace("$uhd:", "");
      SearchMode = "uhd";
    }

    return { SearchStr: SearchStr, SearchMode: SearchMode };
  }

  function GetSkinsFiltered(AllowTemplateSkins) {
    var FilteredSkinList = new Array();

    var StrAndMode = GetSearchStrAndMode();
    var SearchStr = StrAndMode.SearchStr;
    var SearchMode = StrAndMode.SearchMode;

    const Finding = (StrToFind) => {
      if(SearchMode == "")
        return StrToFind.toLowerCase().includes(SearchStr.toLowerCase());
      else
        return StrToFind.toLowerCase() == SearchStr.toLowerCase();
    };

    for (var i = 0; i < SkinList.skins.length; ++i) {
      var CurSkin = SkinList.skins[i];

      if(!AllowTemplateSkins && CurSkin.type == "template")
        continue;

      if(((SearchMode != "skin" && SearchMode != "") || !Finding(CurSkin.name)) &&
        ((SearchMode != "creator" && SearchMode != "") || !Finding(CurSkin.creator)) &&
        ((SearchMode != "skinpack" && SearchMode != "") || !Finding(CurSkin.skinpack)) &&
        ((SearchMode != "type" && SearchMode != "") || !Finding(CurSkin.type)) &&
        ((SearchMode != "license" && SearchMode != "") || !Finding(CurSkin.license)) &&
        ((SearchMode != "uhd" && SearchMode != "") || !Finding(CurSkin.hd.uhd ? "yes" : "no")))
          continue;
      
      FilteredSkinList.push(CurSkin);
    }
    FilteredSkinList.sort((Skin1, Skin2) => {
      if(JS_GET['sort'] == "name") {
        if(JS_GET['dir'] == "down")
          return Skin1.name.localeCompare(Skin2.name);
        else
          return -Skin1.name.localeCompare(Skin2.name);
      }
      else if(JS_GET['sort'] == "type") {
        if(JS_GET['dir'] == "down")
          return Skin1.type.toLowerCase().localeCompare(Skin2.type.toLowerCase());
        else
          return -Skin1.type.toLowerCase().localeCompare(Skin2.type.toLowerCase());
      }
      else if(JS_GET['sort'] == "creator") {
        if(JS_GET['dir'] == "down")
          return Skin1.creator.toLowerCase().localeCompare(Skin2.creator.toLowerCase());
        else
          return -Skin1.creator.toLowerCase().localeCompare(Skin2.creator.toLowerCase());
      }
      else if(JS_GET['sort'] == "skin_pack") {
        if(JS_GET['dir'] == "down")
          return Skin1.skinpack.toLowerCase().localeCompare(Skin2.skinpack.toLowerCase());
        else
          return -Skin1.skinpack.toLowerCase().localeCompare(Skin2.skinpack.toLowerCase());
      }
      else if(JS_GET['sort'] == "release_date") {
        if(JS_GET['dir'] == "down")
          return Skin1.date.toLowerCase().localeCompare(Skin2.date.toLowerCase());
        else
          return -Skin1.date.toLowerCase().localeCompare(Skin2.date.toLowerCase());
      }
      else if(JS_GET['sort'] == "license") {
        if(JS_GET['dir'] == "down")
          return Skin1.license.toLowerCase().localeCompare(Skin2.license.toLowerCase());
        else
          return -Skin1.license.toLowerCase().localeCompare(Skin2.license.toLowerCase());
      }
      else if(JS_GET['sort'] == "uhd") {
        if(JS_GET['dir'] == "down")
          return Number(Skin1.hd.uhd) - Number(Skin2.hd.uhd);
        else
          return -(Number(Skin1.hd.uhd) - Number(Skin2.hd.uhd));
      }
    });

    return FilteredSkinList;
  }

  var DownloadSkinList = null;
  var DownloadSkinListStack = new Array();
  var DownloadSkinListRef = new Array();

  function DownloadSkinsImpl() {
    if(DownloadSkinList != null) {
      var SkinZip = new JSZip();
      for(var i = 0; i < DownloadSkinList.length; ++i) {
        SkinZip.file(DownloadSkinList[i].name, DownloadSkinList[i].data);
      }
      SkinZip.generateAsync({type:"blob"})
      .then(function(content) {
          saveAs(content, "skins.zip");
      });
      DownloadSkinList = null;
    }
  }

  function DownloadSkin(DownloadSkinListRef) {
    let CurDownloaded = 0;
    for(var i = 0; i < DownloadSkinListRef.length; ++i) {
      var Tmp = DownloadSkinListRef[i];
      if (Tmp.loading == 0) {
        CurDownloaded++;
      }
    }
    for(var i = 0; i < DownloadSkinListRef.length; ++i) {
      var Tmp = DownloadSkinListRef[i];
      if (Tmp.loading == -1 && CurDownloaded < 16) {
        Tmp.loading = 0;
        Tmp.obj.open("GET", Tmp.path);
        Tmp.obj.send();
        CurDownloaded++;
      }
    }
  }

  function DownloadSkins(AsUHD) {
    var FilteredSkinList = GetSkinsFiltered(false);
    if(DownloadSkinList == null && FilteredSkinList.length > 0) {
      DownloadSkinList = new Array();
      DownloadSkinListStack = new Array();
      DownloadSkinListRef = new Array();
      for(var i = 0; i < FilteredSkinList.length; ++i) {
        var CurSkin = FilteredSkinList[i];
        if(AsUHD && !CurSkin.hd.uhd)
          continue;
        DownloadSkinListStack.push(false);
        const SkinPath = (CurSkin.type == "normal" ? "skin/" : (CurSkin.type == "community" ? "skin/community/" : "skin/template/")) + (AsUHD ? "uhd/" : "");
        const CurSkinNameImg = CurSkin.name + "." + CurSkin.imgtype;
        const DownloadPath = SkinPath + CurSkinNameImg;
        let SkinAjax = new XMLHttpRequest();
        let Index = DownloadSkinListRef.push({path: DownloadPath, obj: SkinAjax, loading: -1});
        SkinAjax.responseType = "arraybuffer";
        SkinAjax.onreadystatechange = function (CurSkinNameImg) {
          if (this.readyState == 4) {
            if(this.status == 200) {
              DownloadSkinList.push({ name: CurSkinNameImg, data: new Uint8Array(this.response)});
              DownloadSkinListRef[Index - 1].loading = 1;
            }
            else {
              console.log("failed to download skin: " + CurSkinNameImg, this.status);
              DownloadSkinListRef[Index - 1].loading = -2;
            }
            DownloadSkinListStack.pop();
            if(DownloadSkinListStack.length == 0)
              DownloadSkinsImpl();
            DownloadSkin(DownloadSkinListRef);
          }
        }.bind(SkinAjax, CurSkinNameImg);
      }
      if(DownloadSkinListStack.length == 0)
        DownloadSkinList = null;
      DownloadSkin(DownloadSkinListRef);
    }
  }

  function SetDownloadLink(FilteredCount, FilteredHDCount, FilteredCommuntiyCount, FilteredCommuntiyHDCount) {
    var SkinDownloaderObj = document.getElementById("skin_download_link");

    var StrAndMode = GetSearchStrAndMode();
    var SearchStr = StrAndMode.SearchStr;
    var SearchMode = StrAndMode.SearchMode;
    var InnerHTML = "";
    if (SearchMode == "creator") {
      InnerHTML += "All skins by creator '" + SearchStr + "' : <a href=\"javascript:DownloadSkins(false)\">";
      InnerHTML += "Download [" + FilteredCount.toString() + "]";
      InnerHTML += "</a>";
    }
    if (SearchMode == "skinpack") {
      InnerHTML += "All skins from skin pack '" + SearchStr + "' : <a href=\"javascript:DownloadSkins(false)\">";
      InnerHTML += "Download [" + FilteredCount.toString() + "]";
      InnerHTML += "</a>";
    }
    if (SearchMode == "type") {
      InnerHTML += "All skins from grouped as '" + SearchStr + "' skins : <a href=\"javascript:DownloadSkins(false)\">";
      InnerHTML += "Download [" + FilteredCount.toString() + "]";
      InnerHTML += "</a>";
    }
    if (SearchMode == "license") {
      InnerHTML += "All skins with license '" + SearchStr + "' : <a href=\"javascript:DownloadSkins(false)\">";
      InnerHTML += "Download [" + FilteredCount.toString() + "]";
      InnerHTML += "</a>";
    }
    if (SearchMode == "uhd") {
      InnerHTML += "All skins that are UHD '" + SearchStr + "' : <a href=\"javascript:DownloadSkins(false)\">";
      InnerHTML += "Download [" + FilteredCount.toString() + "]";
      InnerHTML += "</a>";
    }
    if (SearchMode == "") {
      InnerHTML += "All skins from the database matching the current filters : <a href=\"javascript:DownloadSkins(false)\">";
      InnerHTML += "Download [" + FilteredCount.toString() + "]";
      InnerHTML += "</a>";
    }

    if(FilteredHDCount > 0)
      InnerHTML += " (<a href=\"javascript:DownloadSkins(true)\">UHD [" + FilteredHDCount + "]</a>)";

    SkinDownloaderObj.innerHTML = InnerHTML;
  }

  var SkinMap = new Map();
  var SkinNeedRender = new Array();

  function DrawSkinListRow(SkinRenderID, CurSkin, RowIndex) {
    const SkinPath = CurSkin.type == "normal" ? "skin/" : (CurSkin.type == "community" ? "skin/community/" : "skin/template/");
    let InnerHTML = '';
    InnerHTML += "<div class='ourgriditem ourgriditem1'><a href=\"" + SkinPath + CurSkin.name + "." + CurSkin.imgtype + "\">";
    InnerHTML += "<canvas style=\"width: 96px; height: 64px\" id=\"skinrender_" + SkinRenderID + CurSkin.name + "\"></canvas></a></div>";
    InnerHTML += "<div class='ourgriditem ourgriditem2'><strong>" + CurSkin.name + "</strong></div><div class='ourgriditem ourgriditem3'>";
    InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$type:" + CurSkin.type.toLowerCase()) + "\">" + CurSkin.type + "</a>";
    InnerHTML += "</div><div class='ourgriditem ourgriditem4'>";

    if (CurSkin.creator != "")
      InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$creator:" + CurSkin.creator.toLowerCase()) + "\">" + CurSkin.creator + "</a>";

    InnerHTML += "</div><div class='ourgriditem ourgriditem5'>";

    if (CurSkin.skinpack != "")
      InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$skinpack:" + CurSkin.skinpack.toLowerCase()) + "\">" + CurSkin.skinpack + "</a>";

    InnerHTML += "</div><div class='ourgriditem ourgriditem6'>" + CurSkin.date;

    InnerHTML += "</div><div class='ourgriditem ourgriditem7'>";

    if (CurSkin.license != "")
      InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$license:" + CurSkin.license.toLowerCase()) + "\">" + CurSkin.license + "</a>";

    InnerHTML += "</div><div class='ourgriditem ourgriditem8'>";
    InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$uhd:" + (CurSkin.hd.uhd ? "yes" : "no")) + "\">" + (CurSkin.hd.uhd ? "yes" : "no") + "</a>";
    
    if(gIsEditMode)
      InnerHTML += "</div><div class='ourgriditem ourgriditem9'><a href=\"javascript:OpenChangeSkin('" + CurSkin.name + "', '" + CurSkin.name + "." + CurSkin.imgtype + "', '" + CurSkin.type + "', '" + CurSkin.creator.replace("'", "\\'") + "', '" + CurSkin.skinpack +"', '" + CurSkin.license +"');\">change</a>&nbsp;&nbsp;&nbsp;<a href=\"javascript:OpenRemoveSkin('" + CurSkin.name + "." + CurSkin.imgtype + "');\">delete</a>";
    else {
      InnerHTML += "</div><div class='ourgriditem ourgriditem9'>";
      InnerHTML += "<a href=\"" + SkinPath + CurSkin.name + "." + CurSkin.imgtype + "\" download=\"" + CurSkin.name + "." + CurSkin.imgtype + "\">Download</a>";
      if(CurSkin.hd.uhd)
        InnerHTML += "&nbsp;&nbsp;&nbsp;<a href=\"" + (SkinPath + "uhd/") + CurSkin.name + "." + CurSkin.imgtype + "\" download=\"" + CurSkin.name + "." + CurSkin.imgtype + "\">UHD</a>";
    }
    
    InnerHTML += "</div>";
    return InnerHTML;
  }

  function DrawSkinListHeaderRow() {
    let InnerHTML = '';
    InnerHTML += "<div class='ourgriditemheader ourgriditem1'>";
    InnerHTML += "</div><div class='ourgriditemheader ourgriditem2'><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("name", "Name") + "</a>";
    InnerHTML += "</div><div class='ourgriditemheader ourgriditem3'><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("type", "Group") + "</a>";
    InnerHTML += "</div><div class='ourgriditemheader ourgriditem4'><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("creator", "Creator") + "</a>";
    InnerHTML += "</div><div class='ourgriditemheader ourgriditem5'><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("skin_pack", "Skin Pack") + "</a>";
    InnerHTML += "</div><div class='ourgriditemheader ourgriditem6'><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("release_date", "Release Date") + "</a>";
    InnerHTML += "</div><div class='ourgriditemheader ourgriditem7'><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("license", "License") + "</a>";
    InnerHTML += "</div><div class='ourgriditemheader ourgriditem8'><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("uhd", "UHD") + "</a>";
    InnerHTML += "</div><div class='ourgriditemheader ourgriditem9'></div>";
    return InnerHTML;
  }

  var lastVList = null;
  var FilteredSkinList = null;

  function genRenderID() {
    return (new Date()).getTime().toString() + "___" + Math.random().toString(16).slice(2) + "___";
  }

  function CheckSkinDownloaded() {
    let CurDownloaded = 0;
    SkinMap.forEach((value) => {
      if(value.Loaded == 0) {
        CurDownloaded++;
      }
    });
    SkinMap.forEach((value) => {
      if(value.Loaded == -1 && CurDownloaded < 16) {
        value.Loaded = 0;
        value.AjaxObj.open("GET", value.ImgSrc);
        value.AjaxObj.send();
        CurDownloaded++;
      }
    });
  }

  function DrawSkinList() {
    var Filter = "";
      
    var SkinListObj = document.getElementById("skinlist");
    var InnerHTML = '';

    FilteredSkinList = GetSkinsFiltered(true);

    var FilteredCountDownload = 0;
    var FilteredHDCountDownload = 0;

    for (var i = 0; i < FilteredSkinList.length; ++i) {
      var CurSkin = FilteredSkinList[i];

      if(CurSkin.type != "template") {
        ++FilteredCountDownload;
        if(CurSkin.hd.uhd)
          ++FilteredHDCountDownload;
      }

      const SkinPath = CurSkin.type == "normal" ? "skin/" : (CurSkin.type == "community" ? "skin/community/" : "skin/template/");

      if(!SkinMap.has(CurSkin.name)) {
        let Img = new Image();
        let SkinDataBase64 = "";
        let SkinAjax = null;
        let LoadState = -1;
        SkinAjax = new XMLHttpRequest();
        SkinAjax.responseType = "arraybuffer";
        SkinAjax.onreadystatechange = function (SkinName) {
          if (this.readyState == 4) {
            if(this.status == 200) {
              let CurItem = SkinMap.get(SkinName);
              CurItem.Loaded = 1;
              const Base64ImgData = btoa(String.fromCharCode(...new Uint8Array(this.response)));
              CurItem.ImgData = Base64ImgData;
              SkinMap.set(SkinName, CurItem);
              CurItem.ImgObj.src = "data:image/png;base64," + Base64ImgData;
            }
            else {
              console.log("failed to download skin: " + SkinName, this.status);
              CurItem.Loaded = -2;
            }
            CheckSkinDownloaded();
          }
        }.bind(SkinAjax, CurSkin.name);

        SkinMap.set(CurSkin.name, {Loaded: LoadState, AjaxObj: SkinAjax, ImgData: SkinDataBase64, ImgObj: Img, SkinName: CurSkin.name, ImgSrc: SkinPath + CurSkin.name + "." + CurSkin.imgtype, skinrenderid: "unused"});
        Img.onload = function (SkinName) {
          let CurItem = SkinMap.get(SkinName);
          CurItem.Loaded = 2;
          SkinMap.set(SkinName, CurItem);
          // render
          let RenderEl = document.getElementById("skinrender_" + CurItem.skinrenderid + SkinName);
          if(RenderEl != undefined)
            OnTeeSkinRender(RenderEl, this);
        }.bind(Img, CurSkin.name);
      }
    }

    SkinListObj.innerHTML = InnerHTML;

    CheckSkinDownloaded();

    SetDownloadLink(FilteredCountDownload, FilteredHDCountDownload);

    const TableHeight = document.body.clientHeight - SkinListObj.offsetTop - parseInt(SkinListObj.style.marginTop) - 40;

    if(lastVList != null) {
      if(lastVList.rmNodeInterval != -1)
        clearTimeout(lastVList.rmNodeInterval);
      if(lastVList.lastScrolledTimeout != -1)
        clearTimeout(lastVList.lastScrolledTimeout);
    }
    lastVList = new VirtualList({
      w: 300,
      h: TableHeight,
      itemHeight: 64,
      table: SkinListObj,
      totalRows: FilteredSkinList.length + 1,
      generatorFn: function(SkinList, row) {
        var el = document.createElement("div");
        const RowIndex = row - 1;
        if(RowIndex == -1) {
          el.innerHTML = DrawSkinListHeaderRow();
          el.style.zIndex = 100;
          el.style.backgroundColor = "var(--bg-block)";
        }
        else if(RowIndex < SkinList.length) {
          var CurSkin = SkinList[RowIndex];
          const skinrenderid = genRenderID();
          el.innerHTML = DrawSkinListRow(skinrenderid, CurSkin, RowIndex);
          el.setAttribute("id", "skinneedrender" + skinrenderid + RowIndex.toString());
          SkinNeedRender.push(RowIndex);
          const MapObj = SkinMap.get(CurSkin.name);
          if(MapObj != null) {
            MapObj.skinrenderid = skinrenderid;
            SkinMap.set(CurSkin.name, MapObj);
          }
        }
        return el;
      }.bind(null, FilteredSkinList),
    });
    let observer = new MutationObserver((mutations) => {
      const SkinRenderCopy = [...SkinNeedRender];
      for(const RowIndex of SkinRenderCopy) {
        if(RowIndex < FilteredSkinList.length) {
          const CurSkin = FilteredSkinList[RowIndex];
          const MapObj = SkinMap.get(CurSkin.name);
          let RenderEl = undefined;
          let el = undefined;
          if(MapObj != undefined) {
            el = document.getElementById("skinneedrender" + MapObj.skinrenderid + RowIndex.toString());
            RenderEl = document.getElementById("skinrender_" + MapObj.skinrenderid + CurSkin.name);
          }
          if(el != undefined && RenderEl != undefined && MapObj.ImgObj != undefined && MapObj.Loaded == 2) {
            SkinNeedRender.splice(SkinNeedRender.indexOf(RowIndex), 1);
            OnTeeSkinRender(RenderEl, MapObj.ImgObj);
          }
        }
      }
    });

    SkinListObj.appendChild(lastVList.container);
    observer.observe(lastVList.container, {
      characterDataOldValue: true, 
      subtree: true, 
      childList: true, 
      characterData: true
    });
    lastVList._renderChunk(lastVList.container, 0);
  }
    
  var SkinList = {};
  documentIsReady(() => {
    const resizeObserver = new ResizeObserver(() => {
      if(Object.keys(SkinList).length > 0)
        DrawSkinList();
    });

    resizeObserver.observe(document.body);

    // get skin list
    let GetSkinJSON = new XMLHttpRequest();
    GetSkinJSON.onreadystatechange = function () {
      if (GetSkinJSON.readyState == 4 && GetSkinJSON.status == 200) {
        SkinList = JSON.parse(GetSkinJSON.responseText);

        if(JS_GET['sort'] == undefined)
          JS_GET['sort'] = "name";
        if(JS_GET['dir'] == undefined)
          JS_GET['dir'] = "down";
        if(JS_GET['search'] == undefined)
          JS_GET['search'] = "";
          
        var SearchInp = document.getElementById("skinsearch");
        SearchInp.value = JS_GET['search'];

        DrawSkinList();
      }
    };
    GetSkinJSON.open("GET", "skin/skins.json");
    GetSkinJSON.send();
  });

</script>


<div id="skinlist" class="nowraptable" cellpadding="5" style="width:100%; margin: 0; margin-top: 20px; display: flex;">
</div>
