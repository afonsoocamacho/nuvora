<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;
use App\Models\MemberType;

class MemberController extends Controller
{
    public function create()
    {
        $organizationID = auth()->id();

        $memberTypes = MemberType::where('organization_id', $organizationID)
            ->get();


        // Return the view with member types
        return view('members.create', [
            'memberTypes' => $memberTypes,
        ]);
    }
}
