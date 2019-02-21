<?php

namespace App\Repositories\Frontend;

use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;
use App\Models\SlideShow;

/**
 * Class UserRepository.
 */
class SlideShowRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return SlideShow::class;
    }
}
