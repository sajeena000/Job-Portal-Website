<?php

namespace App\Http\Controllers;

use App\Models\Company; // Import the correct namespace for the Company model
use Illuminate\Http\Request;

class FeaturedCompaniesController extends Controller
{
    public function index()
    {
        // Add logic to fetch featured companies data from the database
        $featuredCompanies = Company::where('is_featured', true)->get();

        // Pass the data to the view
        return view('featured-companies.index', ['featuredCompanies' => $featuredCompanies]);
    }
}
