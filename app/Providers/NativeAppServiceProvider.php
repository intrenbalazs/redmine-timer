<?php

namespace App\Providers;

use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Facades\Window;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        $window = Window::open()
            ->rememberState()
            ->hideMenu()
            ->width(600)
            ->height(1000)
            ->minWidth(400)
            ->minHeight(400);

        Menu::new()
            ->appMenu()
            ->editMenu()
            ->viewMenu()
            ->windowMenu()
            ->register();

        MenuBar::create()
            ->route('menubar')
            ->showDockIcon();

        if (config('app.platform') === 'darwin') {
            $window->titleBarHidden();
        }
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
        ];
    }
}
