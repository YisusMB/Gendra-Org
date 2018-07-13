@servers(['web' => 'deployerbookshelf@gendra.mx'])

@setup
    $repository = 'git@gitlab.gendra.mx:gendra/gendra-org.git';
    $releases_dir = '/var/www/gendra-org/releases';
    $app_dir = '/var/www/gendra-org';
    $release = date('YmdHis');
    $new_release_dir = $releases_dir .'/'. $release;
@endsetup


@task('list', ['on' => 'web'])
    ls -l
@endtask
