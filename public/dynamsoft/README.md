# ![Dynamic Web TWAIN](https://www.dynamsoft.com/assets/img-icon/logo-dwt-white-300x68.png)
![version](https://img.shields.io/npm/v/dwt.svg)
![downloads](https://img.shields.io/npm/dm/dwt.svg) 
![jsdelivr](https://img.shields.io/jsdelivr/npm/hm/dwt.svg)
![](https://img.shields.io/snyk/vulnerabilities/npm/dwt.svg)

Cross-platform cross-browser JavaScript library for web document scanning.

# Overview

[Dynamic Web TWAIN](https://www.dynamsoft.com/web-twain/overview/) is a TWAIN-based scanning SDK software specifically designed for web applications. With just a few lines of code, you can develop robust applications to scan documents from TWAIN/ICA/SANE-compatible scanners on Windows/macOS/Linux, view and edit the scanned images, then save them to a local/server file system or database. You can even use your mobile devices running iOS | iPadOS | Android with the library starting in 16.2!

## Installation

### The main package

```bash
npm install dwt
```

### A Virtual Scanner

If you do not have a physical scanner to test on Windows, you can install a virtual scanner. Read more [here](https://www.dynamsoft.com/web-twain/docs/getstarted/hardware.html?ver=latest#no-scanner-to-test).

## Quick Start

### Step 1 Create a HTML page and load **`dynamsoft.webtwain.min.js`** into your page:

```html
<!DOCTYPE html>
<html>
<head>
	<title>Hello World</title>
	<script src="dist/dynamsoft.webtwain.min.js"></script>
</head>
<body>
</body>
</html>
```

> Note that a **relative path** is used. You might want to change it based on where you are putting your code. The best practise is to put all the files on your own server and under the same domain as your web application.

### Step 2 Add a script tag and make initial settings:

```html
<!DOCTYPE html>
<html>
<head>
  <title>Hello World</title>
  <script src="dist/dynamsoft.webtwain.min.js"></script>
</head>
<body>
  <script type="text/javascript">
    Dynamsoft.WebTwainEnv.ResourcesPath = "dist";
    Dynamsoft.WebTwainEnv.ProductKey = 't0140cQMAA...';
  </script>
</body>
</html>
```

> Note that `ResourcesPath` and `ProductKey` must be set in order to use the library. 

1. `ResourcesPath` is a relative path to where you put the directory "/dist/" and all the files in it.
2. If you don't have a valid `ProductKey`, you can [request a trial key](https://www.dynamsoft.com/customer/license/trialLicense) to use.

### Step 3 Write code to use the package to do a simple document scan

> The following code demonstrates the minimum code needed to use the package. Note the addition of HTML elements as well as JavaScript code. For more sophisticated sample or demo, check out the [Sample Gallery](https://www.dynamsoft.com/web-twain/resources/code-gallery/) and our [Github Repositories](https://github.com/dynamsoft-dwt).

```html
<!DOCTYPE html>
<html>
<head>
  <title>Hello World</title>
  <script src="dist/dynamsoft.webtwain.min.js"></script>
</head>
<body>
  <input type="button" value="Scan" onclick="AcquireImage();" />
  <div id="dwtcontrolContainer"></div>
  <script type="text/javascript">
    Dynamsoft.WebTwainEnv.ResourcesPath = "dist";
    Dynamsoft.WebTwainEnv.ProductKey = 't0068MgAAAFgW05zp85JXvbVigG3piPN2/luDlLjQF55OJy48LymLDkYdTg6jZQeQ2SJ3ODHgLtAuKCpANd+NB4SXZQg3yXE='; // Put your own key here
    window.onload = function () {
      Dynamsoft.WebTwainEnv.Load();
    };
    var DWObject;
    function Dynamsoft_OnReady() {
      // dwtcontrolContainer is the id of the DIV to create the WebTwain instance in.
      DWObject = Dynamsoft.WebTwainEnv.GetWebTwain('dwtcontrolContainer');
    }
    function AcquireImage() {
      if (DWObject) {
        DWObject.SelectSource(function () {
          DWObject.OpenSource();
          DWObject.AcquireImage(
            {
              PixelType: Dynamsoft.EnumDWT_PixelType.TWPT_RGB,
              Resolution: 200,
              IfDisableSourceAfterAcquire: true
            },
            function () {
              console.log("Successful!");
            },
            function (settings, errCode, errString) {
              alert(errString)
            }
          );
        }, function () {
          alert('SelectSource failed!');
        });
      }
    }
  </script>
</body>
</html>
```

## Included Samples

* **`AcquireImage.html` & `CustomScan.html`**
  * Dynamic Web TWAIN core features
* **`PDFRasterizer.html`**:
  * Using the Rasterizer add-on to convert text-based PDF files
* **`OCRADocument.html`**:
  * Scan, Load images and then perform OCR on them (English)
* **`ReadBarcode.html`**:
  * Scan, Load images and then read barcode off them
* **`ScanOrCapture.html`**:
  * Scan documents from scanners or capture documents from webcams

## Documentation

* [Developer's Guide](https://www.dynamsoft.com/web-twain/docs/about/index.html)
* [API Reference](https://www.dynamsoft.com/web-twain/docs/info/api/index.html)
* [Sample Gallery](https://www.dynamsoft.com/web-twain/resources/code-gallery/)

## Need Help?

[Contact Dynamsoft](https://www.dynamsoft.com/company/contact/) to resolve any issue you encounter with the library.

## Versions

>`Dynamsoft Service (DynamsoftService.exe, 64bit)`
>
>**v16.2** (build version 1, 6, 2, 0112)
>
>`Dynamsoft Service Manager (DWASManager_16200112.dll, 64bit)`
>
>**v16.2** (build version 16, 2, 0, 0112)
>
>`Dynamic Web TWAIN (dwt_16.2.0.0112.dll, 64bit)`
>
>**v16.2** (build version 16, 2, 0, 0112)
>
>`Dynamsoft PDF Rasterizer (DynamicPdfRx64_11.1.0.0112.dll, 64bit)`
>
>**v16.2** (build version 11, 1, 0, 0112)
>
>`Dynamsoft OCR Basic Engine (DynamicOCRx64_10.0.0.0618.dll, 64bit)`
>
>**v16.2** (build version 10, 0, 0, 0618)
>
>`Dynamsoft Barcode Reader (dbrx64_7.6.0.0112.dll, 64bit)`
>
>**v7.6** (build version 7, 6, 0, 0112)
>
>`Dynamsoft Webcam Addon (DynamicWebcamx64_15.0.0.0625.dll, 64bit)`
>
>**v16.2** (build version 15, 0, 0, 0625)
>
>`Dynamsoft Upload Module (UploadModule_1.6.0.0428.dll, 64bit)`
>
>**v16.2** (build version 1, 6, 0, 0428)

## Features

* TWAIN spec 2.3 and below compatible (ActiveX, HTML5 for Windows APIs).
* TWAIN spec 1.9 and below compatible (HTML5 for Mac API).
* ICA compatible (HTML5 for Mac API).
* SANE compatible (HTML5 for Linux).
* Optional disk caching mechanism enables high volume document scanning (up to thousands of pages).
* Supports Auto Document Feeder (ADF) and multiple image acquisition.
* Supports duplex scanning mode if the device supports it.
* Supports setting up image acquisition parameters (resolution, pixel type, bit depth, brightness, contrast, page size, unit, etc).
* Supports both Native and Disk File Image transfer modes on Windows.
* Supports importing existing files in the formats BMP, JPG, PNG, TIF, PDF (image based).
* Supports rasterizing text-based PDF files into images.
* Supports image viewing and basic editing through APIs like rotate, flip, mirror, crop, etc.
* Supports image grouping via tags.
* Supports encrypting local files in buffer and automatic removing of files that are no longer needed.
* Built-in encoding module to create files in the formats BMP, JPG, PNG, TIF, PDF.
* Built-in upload module to easily upload encoded files to FTP or HTTP servers.
* Built-in support for secure HTTP (HTTPS).
* Built-in Image Editor to easily edit images without additional code.
* Webcam Capturing, Barcode reading and OCR with optional addons.
* Supports viewing images and most functionalities on Android and iOS | iPadOS.
