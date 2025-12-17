<table width="100%" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; background-color:#f4f6f8; padding:20px;">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.05);">
                
                <!-- Header -->
                <tr>
                    <td style="background:#27374D; padding:20px;">
                        <h2 style="color:#ffffff; margin:0; font-size:22px;">
                            📩 New Contact Message
                        </h2>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:25px; color:#333333;">
                        <p style="margin:0 0 12px;"><strong>Name:</strong> {{ $data['name'] }}</p>
                        <p style="margin:0 0 12px;"><strong>Email:</strong> {{ $data['email'] }}</p>

                        <p style="margin:20px 0 8px; font-weight:bold;">Message</p>
                        <div style="background:#f4f6f8; padding:15px; border-radius:6px; line-height:1.6;">
                            {{ $data['message'] }}
                        </div>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f4f6f8; padding:15px; text-align:center; font-size:12px; color:#666;">
                        This message was sent from the website contact form.
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
