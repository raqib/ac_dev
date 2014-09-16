<?php

/* List of installed additional extensions. If extensions are added to the list manually
	make sure they have unique and so far never used extension_ids as a keys,
	and $next_extension_id is also updated. More about format of this file yo will find in 
	FA extension system documentation.
*/

$next_extension_id = 25; // unique id for next installed extension

$installed_extensions = array (
  0 => 
  array (
    'name' => 'British COA',
    'package' => 'chart_en_GB-general',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_GB-general.sql',
  ),
  1 => 
  array (
    'name' => 'English Indian COA - New.',
    'package' => 'chart_en_IN-general',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_IN-new.sql',
  ),
  2 => 
  array (
    'name' => 'General 4 digit COA for new company in US',
    'package' => 'chart_en_US-4digit',
    'version' => '2.3.0-5',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-4digit.sql',
  ),
  3 => 
  array (
    'name' => '5 digit American general coa',
    'package' => 'chart_en_US-5digit',
    'version' => '2.3.0-4',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-new2.sql',
  ),
  4 => 
  array (
    'name' => '8 digit GAAP compatible American chart of accounts',
    'package' => 'chart_en_US-GAAP',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-GAAP.sql',
  ),
  5 => 
  array (
    'name' => '5 digit American coa wit educational data',
    'package' => 'chart_en_US-demo2',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-demo2.sql',
  ),
  6 => 
  array (
    'name' => 'Default American coa (5 digits)',
    'package' => 'chart_en_US-general',
    'version' => '2.3.0-3',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-general.sql',
  ),
  7 => 
  array (
    'name' => 'US COA for a nonprofit company',
    'package' => 'chart_en_US-nonprofit',
    'version' => '2.3.0-2',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-nonprofit.sql',
  ),
  8 => 
  array (
    'name' => 'US chart of accounts for service company.',
    'package' => 'chart_en_US-service',
    'version' => '2.3.0-4',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-service.sql',
  ),
  9 => 
  array (
    'name' => 'Asset register',
    'package' => 'asset_register',
    'version' => '2.3.3-9',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/asset_register',
  ),
  10 => 
  array (
    'name' => 'Company Dashboard',
    'package' => 'dashboard',
    'version' => '2.3.15-5',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/dashboard',
  ),
  11 => 
  array (
    'name' => 'Annual balance breakdown report',
    'package' => 'rep_annual_balance_breakdown',
    'version' => '2.3.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_annual_balance_breakdown',
  ),
  12 => 
  array (
    'name' => 'Annual expense breakdown report',
    'package' => 'rep_annual_expense_breakdown',
    'version' => '2.3.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_annual_expense_breakdown',
  ),
  14 => 
  array (
    'name' => 'Dated Stock Sheep',
    'package' => 'rep_dated_stock',
    'version' => '2.3.3-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_dated_stock',
  ),
  15 => 
  array (
    'name' => 'Inventory History',
    'package' => 'rep_inventory_history',
    'version' => '2.3.2-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_inventory_history',
  ),
  16 => 
  array (
    'name' => 'Sales Summary Report',
    'package' => 'rep_sales_summary',
    'version' => '2.3.3-2',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_sales_summary',
  ),
  17 => 
  array (
    'name' => 'Bank Statement w/ Reconcile',
    'package' => 'rep_statement_reconcile',
    'version' => '2.3.3-2',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_statement_reconcile',
  ),
  18 => 
  array (
    'name' => 'Tax inquiry and detailed report on cash basis',
    'package' => 'rep_tax_cash_basis',
    'version' => '2.3.7-2',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_tax_cash_basis',
  ),
  20 => 
  array (
    'name' => 'Report Generator',
    'package' => 'repgen',
    'version' => '2.3.9-3',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/repgen',
  ),
  21 => 
  array (
    'name' => 'Theme Dashboard',
    'package' => 'dashboard_theme',
    'version' => '2.3.15-1',
    'type' => 'theme',
    'active' => false,
    'path' => 'themes/dashboard',
  ),
  24 => 
  array (
    'name' => 'Requisitions',
    'package' => 'requisitions',
    'version' => '2.3.13-2',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/requisitions',
  ),
);
?>