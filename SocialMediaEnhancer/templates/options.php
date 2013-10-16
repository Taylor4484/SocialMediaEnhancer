<div class="wrap">
	<div id="icon-options-general" class="icon32"><br></div>
	<h2><?php echo __('Einstellungen › SocialMediaEnhancer'); ?></h2>

	<p>Der SocialMediaEnhancer erweitert dein Blog durch Social-Media-Icons, zählt die Shares und ermöglicht es deinen Besuchern, deine Inhalte leicht
	zu teilen.</p>

	<p><b>Wichtig!</b> Die Shares werden maximal einmal in der Stunde pro aufgerufenen Artikel abgefragt. Durch Speichern des Artikels in WordPress können
	Sie eine neue Zählung veranlassen.</p>

	<p>Die Daten ses SME stehen im Array zur Verfügung. <code>&lt;?php echo $post->socialInfo['twitter']['count']; ?&gt;</code> zeigt die Anzahl von Tweets an,
	<code>&lt;?php echo $post->socialInfo['total']; ?&gt;</code> zeigt alle sozialen Aktivitäten inklusive aller Kommentare an.</p>

	<form action="options.php" method="post">
		<?php
			settings_fields('smeOptions');

			do_settings_sections('options');
		?>

		<div class="smeOptionBox">
			<h3>Allgemeine Einstellungen</h3>

			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row">Anzuzeigende Dienste</th>
						<td>
							<fieldset>
								<legend class="screen-reader-text"><span>Social-Media-Dienste</span></legend>

								<label for="service_google">
									<input name="smeOptions[general][services][google]" type="checkbox" id="service_google" value="1"<?php if($options['general']['services']['google'] == 1) echo ' checked="checked"'; ?>>
									Google+
								</label><br>

								<label for="service_facebook">
									<input name="smeOptions[general][services][facebook]" type="checkbox" id="service_facebook" value="1"<?php if($options['general']['services']['facebook'] == 1) echo ' checked="checked"'; ?>>
									Facebook
								</label><br>

								<label for="service_twitter">
									<input name="smeOptions[general][services][twitter]" type="checkbox" id="service_twitter" value="1"<?php if($options['general']['services']['twitter'] == 1) echo ' checked="checked"'; ?>>
									Twitter
								</label><br>

								<label for="service_linkedin">
									<input name="smeOptions[general][services][linkedin]" type="checkbox" id="service_linkedin" value="1"<?php if($options['general']['services']['linkedin'] == 1) echo ' checked="checked"'; ?>>
									LinkedIn*
								</label><br>

								<label for="service_pinterest">
									<input name="smeOptions[general][services][pinterest]" type="checkbox" id="service_pinterest" value="1"<?php if($options['general']['services']['pinterest'] == 1) echo ' checked="checked"'; ?>>
									Pinterest*
								</label><br>

								<label for="service_xing">
									<input name="smeOptions[general][services][xing]" type="checkbox" id="service_xing" value="1"<?php if($options['general']['services']['xing'] == 1) echo ' checked="checked"'; ?>>
									XING*
								</label><br>

								<p class="description">Von jedem aktivierten Dienst wird der Teilen-Button auf auf der Webseite angezeigt. Zusätzlich
								werden von dem jeweiligen Dienst die aktuellen Zahlen abgerufen.</p>

								<p><em>*) Die Buttons werden in einer der nächsten Versionen nachgeliefert.</em></p>
							</fieldset>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">Button-Design</th>
						<td>
							<select name="smeOptions[general][style]">
								<option value="sme"<?php if($options['general']['style'] == 'sme') echo ' selected="selected"'; ?>>Buttons</option>
								<option value="flat"<?php if($options['general']['style'] == 'flat') echo ' selected="selected"'; ?>>Flat-Design</option>
								<option value="light"<?php if($options['general']['style'] == 'light') echo ' selected="selected"'; ?>>Klassisch (für helle Hintergründe)</option>
								<option value="dark"<?php if($options['general']['style'] == 'dark') echo ' selected="selected"'; ?>>Klassisch (für dunkele Hintergründe)</option>
							</select><br>

							<p>
								<label for="general_label">
								<input name="smeOptions[general][label]" type="checkbox" id="general_label" value="1"<?php if($options['general']['label'] == 1) echo ' checked="checked"'; ?>>
									Dienste-Namen anzeigen <i>(nicht bei den klassischen Buttons)</i>
								</label>
							</p>

							<p class="description">Bestimmt das Aussehen der Buttons.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">Platzierung der Buttons</th>
						<td>
							<select name="smeOptions[general][embed]">
								<option value="begin"<?php if($options['general']['embed'] == 'begin') echo ' selected="selected"'; ?>>Am Anfang jedes Artikels (empfohlen)</option>
								<option value="end"<?php if($options['general']['embed'] == 'end') echo ' selected="selected"'; ?>>Am Ende jedes Artikels</option>
								<option value="disabled"<?php if($options['general']['embed'] == 'disabled') echo ' selected="selected"'; ?>>Manuelle Einbindung</option>
							</select><br>

							<p class="description">Wenn Sie manuelle Einbindung wählen, fügen Sie den Marker <code>[socialMediaEnhancer]</code> in den
							Quelltext ein.</p>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row">Metainformationen</th>
						<td>
							<label for="general_opengraph">
								<input name="smeOptions[general][opengraph][disable]" type="checkbox" id="general_opengraph" value="1"<?php if($options['general']['opengraph']['disable'] == 1) echo ' checked="checked"'; ?>>
								Open-Graph-Metainformationen deaktivieren <i>(nicht empfohlen)</i>
							</label><br>

							<p class="description">Der SocialMediaManager fügt der Seite optionale Metainformationen hinzu, damit die Netzwerke die optimalen Daten zum Teilen Ihrer Inhalte verwenden.</p>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<br>

		<h3>Social-Media-Accounts</h3>

		<p>Tragen Sie bitte hier Ihre Social-Media-Account ein.</p>

		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row">
						Google+<br>
						<small>(Vollständige URL)</small>
					</th>
					<td>
						<input type="text" name="smeOptions[accounts][google]" value="<?php echo $options['accounts']['google']; ?>" class="regular-text ltr" placeholder="https://plus.google.com/102458928073783517690" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						Facebook<br>
						<small>(Vollständige URL)</small>
					</th>
					<td>
						<input type="text" name="smeOptions[accounts][facebook]" value="<?php echo $options['accounts']['facebook']; ?>" class="regular-text ltr" placeholder="https://www.facebook.com/dmacx" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						Twitter-Username
						<small>(without @)</small>
					</th>
					<td>
						<input type="text" name="smeOptions[accounts][twitter]" value="<?php echo $options['accounts']['twitter']; ?>" class="regular-text ltr" placeholder="macx" />
					</td>
				</tr>
			</tbody>
		</table>

		<?php submit_button(); ?>
	</form>
</div>

