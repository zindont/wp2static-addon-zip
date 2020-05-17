
<p><i><a href="<?php echo admin_url('admin.php?page=wp2static-zip'); ?>">Refresh page</a> to see latest status</i><p>

<table class="widefat striped">
    <thead>
        <tr>
            <th>Filename</th>
            <th>Zip Size</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($view['zips'] as $key => $zip) : ?>
            <tr>
                <td>
                    <?php if ( $zip['zip_path'] ) : ?>
                        <?php echo $zip['fileName']; ?>
                    <?php endif; ?>
                </td>            
                <td>
                    <?php if ( $zip['zip_path'] ) : ?>
                        <?php echo $zip['zip_size']; ?>
                    <?php else: ?>
                        No ZIP found.
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ( $zip['zip_path'] ) : ?>
                        <?php echo $zip['zip_created']; ?>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ( $zip['zip_path'] ) : ?>
                        <a style="float:left;margin-right:10px;" href="<?php echo $zip['zip_url']; ?>"><button class="button btn-danger">Download ZIP</button></a>

                        <form
                            name="wp2static-zip-delete"
                            method="POST"
                            action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">

                            <?php wp_nonce_field( $view['nonce_action'] ); ?>
                            <input name="action" type="hidden" value="wp2static_zip_delete" />

                            <button class="button btn-danger">Delete ZIP</button>
                        </form>
                    <?php endif; ?>

                </td>
            </tr>

            <?php endforeach; ?>
        
    </tbody>
</table>

