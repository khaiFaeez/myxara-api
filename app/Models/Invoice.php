<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'Invoice';

    public function account(): HasMany
    {
        return $this->hasMany(Account::class, 'Inv_No', 'Id');
    }

    public function delivery(): HasMany
    {
        return $this->hasMany(Delivery::class, 'Inv_No', 'Id');
    }

    public function receipt(): HasMany
    {
        return $this->hasMany(AccountReceipt::class, 'Inv_No', 'Id');
    }

    public static function boot()
    {
        parent::boot();

        if (auth()->user()) {
            $user = User::with('client')->find(auth()->user()->id);
            if (!auth()->user()->isAdmin) {
            self::addGlobalScope(function (Builder $builder) use ($user) {
                if ($user->client->id) {
                    $builder->where('MyKad_SSM', $user->client->id);
                }
            });
            }
        }
    }
}
