<!-- Begin Main Menu -->
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(2, "mmi_bokking_city", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("2", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "bokking_cityrpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(4, "mmi_booking_date", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("4", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "booking_daterpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(5, "mmi_booking_status", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("5", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "booking_statusrpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(10, "mmi_date_vise_payment", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("10", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "date_vise_paymentrpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(12, "mmi_garage_service", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("12", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "garage_servicerpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(13, "mmi_garage_status", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("13", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "garage_statusrpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(18, "mmi_service_category", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("18", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "service_categoryrpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(19, "mmi_service_price", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("19", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "service_pricerpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(20, "mmi_service_vise_booking", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("20", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "service_vise_bookingrpt.php", -1, "", TRUE, FALSE);
$RootMenu->AddMenuItem(21, "mmi_service_status", $ReportLanguage->Phrase("SimpleReportMenuItemPrefix") . $ReportLanguage->MenuPhrase("21", "MenuText") . $ReportLanguage->Phrase("SimpleReportMenuItemSuffix"), "service_statusrpt.php", -1, "", TRUE, FALSE);
$RootMenu->Render();
?>
<!-- End Main Menu -->
