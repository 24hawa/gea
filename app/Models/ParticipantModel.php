<?php

namespace App\Models;

use CodeIgniter\Model;

class ParticipantModel extends Model
{
    protected $table      = 'participants';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id', 'reference_code', 'nomination_type', 'award_category', 
        'prefix', 'first_name', 'middle_name', 'last_name', 'gender', 
        'institution', 'nationality', 'phone', 'email', 'email2', 
        'address', 'executive_summary', 'key_contributions', 'impact_outcomes', 
        'innovation_excellence', 'sustainability_potential', 'youtube_link', 
        'supporting_document', 'status', 'nominator_fname','nominatior_mname',
        'nominator_lname','affiliation2', 'b_fname', 'b_mname', 'b_lname',
        'b_institution','n_email', 'nominator_gender', 'nationality', 'nominator_prefix',
        'email2', 'contact2', 'references_data'
    ];

    /**
     * Generates a unique reference code for the nomination
     */
    public function generateReferenceCode(): string
    {
        // Example: NOM-2026-A1B2
        return 'NOM-' . date('Y') . '-' . strtoupper(substr(md5(uniqid()), 0, 4));
    }
}