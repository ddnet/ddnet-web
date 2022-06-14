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
</style>

<div id="addskinpopup" class="modifyskinpopup">
  <form action="edit/modify_skin.php" method="post" enctype="multipart/form-data" style="margin: 0;">
  <table cellpadding="5" style="margin: 0;">
  <tr><td>Image</td><td><input name="image" type="file"></td></tr>
  <tr><td>Creator</td><td><input name="creator" type="text"></td></tr>
  <tr><td>Skin pack</td><td><input name="skin_pack" type="text"></td></tr>
  <tr><td>License</td><td><input name="skin_license" type="text" placeholder="unknown"></td></tr>
  <tr><td>Type</td><td><select name="skin_type"><option value="normal" selected>normal</option><option value="community">community</option><option value="template">template(not downloadable by client)</option></select></td></tr>
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
  </table>
  <input id="changeskinname2" name="skin_name" type="hidden" value="">
  <input id="changeskinname3" name="skin_type" type="hidden" value="">
  <input name="skinisuhd" type="hidden" value="false">
  <input name="game_version" type="hidden" value="tw-0.6">
  <input name="skin_part" type="hidden" value="full">
  <input name="modifyaction" type="hidden" value="change">
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
<div class="block">

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

  function OpenChangeSkin(ChangeSkinName, ChangeSkinType, ChangeSkinCreator, ChangeSkinSkinPack, ChangeSkinLicense) {
    var AddSkinPopup = document.getElementById("changeskinpopup");
    if(!IsSkinChangeOpen)
      AddSkinPopup.style.display = "block";
    else
      AddSkinPopup.style.display = "none";

    if(ChangeSkinName != undefined) {
      document.getElementById("changeskinname").value = ChangeSkinName;
      document.getElementById("changeskinname2").value = ChangeSkinName;
      document.getElementById("changeskinname3").value = ChangeSkinType;
      document.getElementById("changeskincreator").value = ChangeSkinCreator;
      document.getElementById("changeskinskinpack").value = ChangeSkinSkinPack;
      document.getElementById("changeskinlicense").value = ChangeSkinLicense;
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
          return Skin1.hd.uhd == Skin2.hd.uhd ? 0 : 1;
        else
          return -(Skin1.hd.uhd == Skin2.hd.uhd ? 0 : 1);
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
        let Index = DownloadSkinListRef.push({path: DownloadPath, obj: SkinAjax});
        SkinAjax.responseType = "arraybuffer";
        SkinAjax.onreadystatechange = function (CurSkinNameImg) {
          if (this.readyState == 4) {
            if(this.status == 200) {
              DownloadSkinList.push({ name: CurSkinNameImg, data: new Uint8Array(this.response)});
            }
            DownloadSkinListStack.pop();
            if(DownloadSkinListStack.length == 0)
              DownloadSkinsImpl();
          }
        }.bind(SkinAjax, CurSkinNameImg);
      }
      if(DownloadSkinListStack.length == 0)
        DownloadSkinList = null;
      for(var i = 0; i < DownloadSkinListRef.length; ++i) {
        var Tmp = DownloadSkinListRef[i];
        Tmp.obj.open("GET", Tmp.path);
        Tmp.obj.send();
      }
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
    InnerHTML += " (template skins are always automatically ignored)";

    SkinDownloaderObj.innerHTML = InnerHTML;
  }

  var SkinMap = new Map();

  function DrawSkinList() {
    var Filter = "";
      
    var SkinListObj = document.getElementById("skinlist");
    var InnerHTML = "";
    InnerHTML += "<tr><td style=\"width: 96px;\">";
    InnerHTML += "</td><td><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("name", "Name") + "</a>";
    InnerHTML += "</td><td><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("type", "Group") + "</a>";
    InnerHTML += "</td><td><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("creator", "Creator") + "</a>";
    InnerHTML += "</td><td><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("skin_pack", "Skin Pack") + "</a>";
    InnerHTML += "</td><td><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("release_date", "Release Date") + "</a>";
    InnerHTML += "</td><td><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("license", "License") + "</a>";
    InnerHTML += "</td><td><a href=\"javascript:SetLocationParams('" + JS_GET['search'] + "', " + GetTableHeaderNameInline("uhd", "UHD") + "</a>";
    InnerHTML += "</td><td></td></tr>\n";

    var FilteredSkinList = GetSkinsFiltered(true);

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
        SkinMap.set(CurSkin.name, {Loaded: false, ImgObj: Img, SkinName: CurSkin.name, ImgSrc: SkinPath + CurSkin.name + "." + CurSkin.imgtype});
        Img.onload = function (SkinName) {
          let CurItem = SkinMap.get(SkinName);
          CurItem.Loaded = true;
          SkinMap.set(SkinName, CurItem);
          // render
          let RenderEl = document.getElementById("skinrender_" + SkinName);
          if(RenderEl != undefined)
            OnTeeSkinRender(RenderEl, this);
        }.bind(Img, CurSkin.name);
      }

      InnerHTML += "<tr><td style=\"width: 96px; height: 64px;\"><a href=\"" + SkinPath + CurSkin.name + "." + CurSkin.imgtype + "\">";
      InnerHTML += "<canvas style=\"width: 96px; height: 64px\" id=\"skinrender_" + CurSkin.name + "\"></canvas></a></td>";
      InnerHTML += "<td><strong>" + CurSkin.name + "</strong></td>\n  <td>";
      InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$type:" + CurSkin.type.toLowerCase()) + "\">" + CurSkin.type + "</a>";
      InnerHTML += "</td><td>";

      if (CurSkin.creator != "")
        InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$creator:" + CurSkin.creator.toLowerCase()) + "\">" + CurSkin.creator + "</a>";

      InnerHTML += "</td><td>";

      if (CurSkin.skinpack != "")
        InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$skinpack:" + CurSkin.skinpack.toLowerCase()) + "\">" + CurSkin.skinpack + "</a>";

      InnerHTML += "</td><td>" + CurSkin.date;

      InnerHTML += "</td><td>";

      if (CurSkin.license != "")
        InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$license:" + CurSkin.license.toLowerCase()) + "\">" + CurSkin.license + "</a>";

      InnerHTML += "</td><td>";
      InnerHTML += "<a href=\"index.php?search=" + encodeURIComponent("$uhd:" + (CurSkin.hd.uhd ? "yes" : "no")) + "\">" + (CurSkin.hd.uhd ? "yes" : "no") + "</a>";
      
      if(gIsEditMode)
        InnerHTML += "</td><td><a href=\"javascript:OpenChangeSkin('" + CurSkin.name + "." + CurSkin.imgtype + "', '" + CurSkin.type + "', '" + CurSkin.creator + "', '" + CurSkin.skinpack +"', '" + CurSkin.license +"');\">change</a>&nbsp;&nbsp;&nbsp;<a href=\"javascript:OpenRemoveSkin('" + CurSkin.name + "." + CurSkin.imgtype + "');\">delete</a>";
      else {
        InnerHTML += "</td><td>";
        InnerHTML += "<a href=\"" + SkinPath + CurSkin.name + "." + CurSkin.imgtype + "\" download=\"" + CurSkin.name + "." + CurSkin.imgtype + "\">Download</a>";
        if(CurSkin.hd.uhd)
          InnerHTML += "&nbsp;&nbsp;&nbsp;<a href=\"" + (SkinPath + "uhd/") + CurSkin.name + "." + CurSkin.imgtype + "\" download=\"" + CurSkin.name + "." + CurSkin.imgtype + "\">UHD</a>";
      }
      
      InnerHTML += "</td></tr>\n";
    }

    SkinListObj.innerHTML = InnerHTML;

    SkinMap.forEach((value) => {
      if(!value.Loaded) {
        value.ImgObj.src = value.ImgSrc;
      }
      else {
        // render
        let RenderEl = document.getElementById("skinrender_" + value.SkinName);
        if(RenderEl != undefined)
          OnTeeSkinRender(RenderEl, value.ImgObj);
      }
    });

    SetDownloadLink(FilteredCountDownload, FilteredHDCountDownload);
  }
  
  var SkinList = {};
  documentIsReady(() => {
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


<div style="overflow: auto; padding-right:30px">
<table id="skinlist" class="nowraptable" cellpadding="5" style="width:100%; margin: 0; margin-top: 20px;">
</table>
</div>
