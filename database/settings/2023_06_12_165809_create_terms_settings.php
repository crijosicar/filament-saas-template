<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('terms_settings.service', null);
        $this->migrator->add('terms_settings.privacy_policy', null);
    }

    private function termsOfService(): string
    {
        return file_get_contents(resource_path('markdown/terms.md'));
    }

    private function privacyPolicy(): string
    {
        return file_get_contents(resource_path('markdown/policy.md'));
    }
};
