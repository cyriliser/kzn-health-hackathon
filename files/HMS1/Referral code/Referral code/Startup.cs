using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Referral_code.Startup))]
namespace Referral_code
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
